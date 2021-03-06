<?php
/*
	Linuxteam teilam Site
    Copyright (C) 2012-2013  Linuxteam teilam

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>
*/
require('./phpBB3/config.php');
$edit=$_GET['edit'];
$id=$_GET['id'];
	
if(!intval($id) && (!intval($edit) && ($edit!=1||$edit!=0)))
{
	die("Λάθος παραμέτροι");
}

$hostname=get_hostname();
$connection=mysql_connect($dbhost,$dbuser,$dbpasswd);

if(!$connection)
{
	die("Δεν μπορεί να συνδεθεί στην βάση δεδομένων");
}

mysql_select_db("web",$connection);
mysql_query("set names 'utf8'",$connection);

if (($user->data['user_id'] != ANONYMOUS)&&$auth->acl_gets('a_'))
{
	echo '<h2>Φόρμα εκχώρισης event</h2>';

	$title="";
	$forum="";
	$users="";
	$about="";
	$timeStart=time();
	$timeEnd=time();
	$location="";
	$cover="./assets/img/tux.png";
	if($edit==1)
	{
		$sql="SELECT * FROM actions NATURAL JOIN events WHERE ACTIONID=".$id;
		$query=mysql_query($sql);
		$result=mysql_fetch_assoc($query);
		if(mysql_num_rows($query)>0)
		{
			$title=$result['TITLE'];
			$timeStart=$result['begin'];
			$timeEnd=$result['end'];
			$forum=$result['FORUM'];
			$about=$result['ABOUT'];
			$location=$result['location'];
			$users=$result['USER'];
			$cover=$result['COVERPATH'];			
		}

	}

	if(!empty($_POST['submit']))
	{

		
		$title=$_POST['title'];
		$users=$_POST['users'];
		$about=$_POST['about'];
		$eyear=(!empty($_POST['eyear']))?$_POST['eyear']:date('Y');
		$syear=(!empty($_POST['syear']))?$_POST['syear']:date('Y');
		$begin=mktime($_POST['shour'],$_POST['smin'],0,$_POST['smonth'],$_POST['sday'],$syear);
		$end=mktime($_POST['ehour'],$_POST['emin'],0,$_POST['emonth'],$_POST['eday'],$eyear);
		$forum=$_POST['forum'];
		$location=$_POST['location'];
		$msg="";

		
		if(!empty($title) && !empty($about) && !empty($forum) && !empty($location)&& !empty($users))
		{
			if($edit==0)
			{
				$sql1="INSERT INTO actions (TITLE,USER,COVERPATH,FORUM,ABOUT) VALUES('".$title."','".$users."','".substr($cover,1)."','".$forum."','".$about."')";
				$sql2="SELECT MAX(ACTIONID) AS ACTIONID from actions where ACTIONID NOT IN (SELECT ACTIONID from events) AND ACTIONID NOT IN (Select ACTIONID from projects) and user='".$users."'";
			}
			else
			{
				$sql1="UPDATE actions set TITLE='".$title."', COVERPATH='".$cover."', FORUM='".$forum."', ABOUT='".$about."' WHERE ACTIONID=".$id;
				$sql3="UPDATE events SET begin=".$begin.", end=".$end.", location='".$location."' where ACTIONID=".$id;
			}
			//insert 
			
			$query1=mysql_query($sql1);
			
			if($edit==0)
			{
				$query=mysql_query($sql2);
				$result=mysql_fetch_assoc($query);
				$sql3="INSERT INTO events (ACTIONID,begin,end,location) VALUES(".$result['ACTIONID'].",'".$begin."','".$end."','".$location."')";

				$id=$result['ACTIONID'];
			}
			
			$query2=mysql_query($sql3);
			if($query1 && $query2)
			{
				$msg.="Έχει εισαχθεί επιτυχώς το event.<br>";
				$edit=1;
			}
			else
			{
				$msg.="Aποτυχία εισαγωγής event<br>";
			}
		}
		else if(empty($title))
		{
			$msg.="Δεν έχει συμπληρωθεί ο τίτλος του project<br>";
		}
		else if(empty($about))
		{
			$msg.="Δεν έχει συμπληρωθεί η το πεδίο about<br>";
		}
		else if(empty($location))
		{
			$msg.="Δεν έχουν συμπληρωθεί ο τόπος διεξαγωγής<br>";
		}
		else if(empty($author))
		{
			$msg.="Δεν έχει συμπληρωθεί το πεδίο των διοργανοτών<br>";
		}
		else
		{
			$msg.="Δεν έχει συμπληρωθεί το πεδίο συνδέσμου στο forum<br>";
		}
	}

if(!empty($msg))
{
	echo $msg;
}
?>

<form action="<?php echo $hostname;?>/add_event.php?id=<?php echo $id;?>&edit=<?php echo $edit;?>" method="post" enctype="multipart/form-data">
<strong>Τίτλος:*</strong><br><input type="text" name="title" value="<?php echo $title?>"/><br>
<strong>Διοργανοτές:*</strong><br>
<input type="text" name="users" value="<?php echo $users;?>"/><br>
<strong>Τοποθεσία:*</strong><br>
<input type="text" name="location" value="<?php echo $location;?>"/><br>
<strong>Έναρξη:*</strong><br>
<strong>Ημερομηνία:</strong>
<input type="text" name="sday" value="<?php echo date('d',$timeStart);?>" maxlength="2" size="2"/>
<?
	$months=array(1=>"Ιανουάριος", 2=>"Φεβρουάριος", 3=>"Μάρτιος", 4=>"Απρίλιος", 5=>"Μάιος", 6=>"Ιούνιος",
			7=>"Ιούλιος",8=>"Αύγουστος",9=>"Σεπτέμβριος",10=>"Οκτώβριος",11=>"Νοέμβριος", 12=>"Δεκέμβριος");
	$month_start= date('m',$timeStart);
	$month_end=date('m',$timeEnd);
?>
<select name="smonth" >
	<?
	foreach($months as $m_id=>$month)
	{
	?>
	<option value="<?echo $m_id?>"
	<? 
		if($m_id==$month_start)
		{
			echo " selected ";
		}
		echo ">".$month."</option>";
	}
	?>
</select>
<input type="text" name="syear" value="<?echo date('Y',$timeStart);?>" maxlength="4" size="4"/>
<strong>Ώρα:</strong>
<INPUT TYPE="NUMBER" name="shour" MIN="8" MAX="20" STEP="1" value="<?php echo date('H',$timeStart);?>" SIZE="2">
<INPUT TYPE="NUMBER" name="smin" MIN="0" MAX="59" STEP="1" value="<?php echo date('i',$timeStart);?>" SIZE="2">
<br>
<strong>Λήξη:*</strong><br>
<strong>Ημερομηνία:</strong>
<input type="text" name="eday" value="<?php echo date('d',$timeEnd);?>" maxlength="4" size="4"/>
<select name="emonth">
        <?
        foreach($months as $m_id=>$month)
        {
        ?>
        <option value="<?echo $m_id?>"
	<? 
                if($m_id==$month_end)
                {
                        echo "selected";
                }
                echo ">".$month."</option>";
        }
        ?>
</select>
<input type="text" name="eyear" value="<?php echo date('Y',$timeEnd);?>" maxlength="4" size="4"/>
<strong>Ώρα:</strong>
<INPUT TYPE="NUMBER" name="ehour" MIN="8" MAX="20" STEP="1" value="<?php echo date('H',$timeEnd);?>" SIZE="2">
<INPUT TYPE="NUMBER" name="emin" MIN="0" MAX="59" STEP="1" value="<?php echo date('i',$timeEnd);?>" SIZE="2">
<br>
<strong>Forum Link:*</strong><br>
<input type="text" name="forum" value="<?php echo $forum?>"></input><br>
<strong>Λίγα λόγια για το event σας:*</strong><br>
<textarea rows="20" cols="50" name="about"> <?php echo $about?></textarea><br>
<input type="submit" name="submit" value="Εκχώριση event"></submit>
</form>
Τα πεδία με <strong>*</strong> είναι <strong>απαραίτητα</strong>
<?php
}

?>
