<?php
/**
*
* acp_groups [Greek - El]
*
* @package language
* @version $Id: groups.php 10882 2010-12-05 13:15:08Z git-gate $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
* Ελληνική μετάφραση από την ομάδα του phpbbgr.com:
* (http://phpbbgr.com/team/)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACP_GROUPS_MANAGE_EXPLAIN'		=> 'Εδώ μπορείτε να διαχειριστείτε όλες τις ομάδες μελών σας, να διαγράψετε, να δημιουργήσετε και να επεξεργαστείτε ήδη υπάρχοντες ομάδες. Μπορείτε να επιλέξετε συντονιστές ομάδων, να καθορίσετε σαν ανοιχτές/κλειστές τις ομάδες και να τους αποδώσετε όνομα και περιγραφή.',
	'ADD_USERS'						=> 'Προσθήκη μελών',
	'ADD_USERS_EXPLAIN'				=> 'Εδώ μπορείτε να προσθέσετε μέλη σε μια ομάδα. Μπορείτε να ρυθμίσετε εάν αυτή η ομάδα είναι η κύρια ομάδα για τα επιλεγμένα μέλη. Εκτός αυτού μπορείτε να προσθέσετε ένα μέλος ηγέτη αυτής της ομάδας. Παρακαλώ εισάγετε κάθε όνομα μέλους σε μια χωριστή γραμμή.',

	'COPY_PERMISSIONS'				=> 'Μεταφορά προσβάσεων από',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'Όταν δημιουργηθεί, η ομάδα θα αποκτήσει ίδιες προσβάσεις με αυτήν που καθορίσατε.',
	'CREATE_GROUP'					=> 'Δημιουργία ομάδας',

	'GROUPS_NO_MEMBERS'				=> 'Αυτή η ομάδα δεν έχει μέλη',
	'GROUPS_NO_MODS'				=> 'Δεν ορίσθηκε συντονιστής ομάδας',
	'GROUP_APPROVE'					=> 'Έγκριση μέλους',
	'GROUP_APPROVED'				=> 'Εγκεκριμένα μέλη',
	'GROUP_AVATAR'					=> 'Άβαταρ ομάδας',
	'GROUP_AVATAR_EXPLAIN'			=> 'Αυτή η εικόνα θα εμφανίζετε στον Πίνακα Ελέγχου Ομάδας.',
	'GROUP_CLOSED'					=> 'Κλειστή',
	'GROUP_COLOR'					=> 'Χρώμα ομάδας',
	'GROUP_COLOR_EXPLAIN'			=> 'Ορίζει το χρώμα με το οποίο θα εμφανίζεται το όνομα χρήστη κάθε μέλους της ομάδας, αφήστε το κενό για τα προκαθορισμένα χρώματα.',
	'GROUP_CONFIRM_ADD_USER'		=> 'Είστε σίγουρος ότι θέλετε να προσθέσετε το μέλος %1$s σε αυτή την ομάδα;',
	'GROUP_CONFIRM_ADD_USERS'		=> 'Είστε σίγουρος ότι θέλετε να προσθέσετε τα μέλη %1$s σε αυτή την ομάδα;',
	'GROUP_CREATED'					=> 'Επιτυχής δημιουργία ομάδας.',
	'GROUP_DEFAULT'					=> 'Ορίστε την ομάδα σαν βασική για το μέλος',
	'GROUP_DEFS_UPDATED'			=> 'Ορίστε την ομάδα σαν βασική για τα επιλεγμένα μέλη.',
	'GROUP_DELETE'					=> 'Αφαίρεση του μέλους από την ομάδα',
	'GROUP_DELETED'					=> 'Επιτυχής διαγραφή ομάδας και ορισμός βασικής ομάδας χρήσης.',
	'GROUP_DEMOTE'					=> 'Υποβιβασμός συντονιστή ομάδας',
	'GROUP_DESC'					=> 'Περιγραφή ομάδας',
	'GROUP_DETAILS'					=> 'Λεπτομέρειες ομάδας',
	'GROUP_EDIT_EXPLAIN'			=> 'Εδώ μπορείτε να επεξεργαστείτε μια ήδη υπάρχων ομάδα. Μπορείτε να αλλάξετε το όνομα της, την περιγραφή της και τον τύπο της (ανοικτή, κλειστή, κλπ.). Μπορείτε επίσης να ορίσετε εκτεταμένες επιλογές της ομάδας όπως χρώμα ομάδας, βαθμό, κλπ. Οι αλλαγές που θα γίνουν εδώ υπερκαλύπτουν αυτές των χρηστών. Σημειώστε ότι τα μέλη της ομάδας δεν μπορούν να αλλάξουν το άβαταρ τους εκτός και αν τους δώσετε τις κατάλληλες προσβάσεις.',
	'GROUP_ERR_USERS_EXIST'			=> 'Το καθορισμένο μέλος ανήκει ήδη σε αυτήν την ομάδα.',
	'GROUP_FOUNDER_MANAGE'			=> 'Έλεγχος μόνο από ιδρυτικό μέλος',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> 'Περιορίστε την διαχείριση της ομάδας μόνο σε ιδρυτικά μέλη. Τα μέλη με δικαιώματα ομάδας μπορούν ακόμα να βλέπουν αυτήν την ομάδα όπως και τα μέλη της.',
	'GROUP_HIDDEN'					=> 'Κρυφή',
	'GROUP_LANG'					=> 'Γλώσσα ομάδας',
	'GROUP_LEAD'					=> 'Συντονιστές ομάδας',
	'GROUP_LEADERS_ADDED'			=> 'Νέοι συντονιστές προστέθηκαν επιτυχώς στην ομάδα.',
	'GROUP_LEGEND'					=> 'Προβολή ομάδας στο υπόμνημα',
	'GROUP_LIST'					=> 'Τρέχοντα μέλη',
	'GROUP_LIST_EXPLAIN'			=> 'Αυτή είναι η ολοκληρωμένη λίστα των μελών αυτής της ομάδας. Μπορείτε να διαγράψετε μέλη (εκτός από ειδικές ομάδες) ή να προσθέσετε νέα.',
	'GROUP_MEMBERS'					=> 'Μέλη ομάδας',
	'GROUP_MEMBERS_EXPLAIN'			=> 'Αυτή είναι η ολοκληρωμένη λίστα των μελών αυτής της ομάδας. Περιέχει ξεχωριστά τμήματα για συντονιστές, εκκρεμή και υπάρχοντα μέλη. Από εδώ μπορείτε να διαχειριστείτε ποιος είναι μέλος της ομάδας και τον ρόλο του σε αυτήν. Για να βγάλετε έναν συντονιστή αλλά να τον κρατήσετε στην ομάδα χρησιμοποιήστε το Υποβιβασμός αντί του Διαγραφή. Παρομοίως χρησιμοποιήστε το Προαγωγή για να κάνετε υπάρχον μέλος συντονιστή.',
	'GROUP_MESSAGE_LIMIT'			=> 'Όριο προσωπικών μηνυμάτων ομάδας ανά φάκελο',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> 'Αυτή η ρύθμιση υπερκαλύπτει το όριο του φακέλου ανά μέλος. Η τιμή 0 σημαίνει ότι θα χρησιμοποιηθεί το όριο του μέλους.',
	'GROUP_MODS_ADDED'				=> 'Νέοι συντονιστές προστέθηκαν επιτυχώς.',
	'GROUP_MODS_DEMOTED'			=> 'Συντονιστές ομάδας υποβιβάστηκαν επιτυχώς.',
	'GROUP_MODS_PROMOTED'			=> 'Συντονιστές ομάδας προβιβάστηκαν επιτυχώς.',
	'GROUP_NAME'					=> 'Όνομα ομάδας',
	'GROUP_NAME_TAKEN'				=> 'Το όνομα ομάδας που εισάγατε χρησιμοποιείται ήδη, παρακαλώ επιλέξτε άλλο.',
	'GROUP_OPEN'					=> 'Ανοικτή',
	'GROUP_PENDING'					=> 'Εκκρεμή μέλη',
	'GROUP_MAX_RECIPIENTS'			=> 'Μέγιστος αριθμός παραληπτών ανά προσωπικό μήνυμα ',
	'GROUP_MAX_RECIPIENTS_EXPLAIN'	=> 'Ο μέγιστος αριθμός παραληπτών σε ένα προσωπικό μήνυμα. Εάν εισάγετε 0, θα χρησιμοποιηθεί ο πίνακας-ευρείας ρύθμισης.',
	'GROUP_OPTIONS_SAVE'			=> 'Επιλογές για όλη την ομάδα',
	'GROUP_PROMOTE'					=> 'Προαγωγή σε συντονιστή ομάδας',
	'GROUP_RANK'					=> 'Βαθμός ομάδας',
	'GROUP_RECEIVE_PM'				=> 'Η ομάδα έχει την δυνατότητα λήψης προσωπικών μηνυμάτων',
	'GROUP_RECEIVE_PM_EXPLAIN'		=> 'Σημειώστε ότι κρυφές ομάδες δεν μπορούν να λάβουν προσωπικά μηνύματα, ασχέτως με αυτήν την επιλογή.',
	'GROUP_REQUEST'					=> 'Αίτηση',
	'GROUP_SETTINGS_SAVE'			=> 'Εκτεταμένες επιλογές ομάδας',
	'GROUP_SKIP_AUTH'				=> 'Εξαίρεση ηγέτη αμάδας από τα δικαιώματα',
	'GROUP_SKIP_AUTH_EXPLAIN'		=> 'Εάν αυτό είναι ενεργοποιημένο ο ηγέτης ομάδας  δεν παίρνει δικαιώματα από αυτήν την ομάδα.',
	'GROUP_TYPE'					=> 'Τύπος ομάδας',
	'GROUP_TYPE_EXPLAIN'			=> 'Αυτό καθορίζει ποια μέλη μπορούν να γραφτούν ή να δουν την ομάδα.',
	'GROUP_UPDATED'					=> 'Επιτυχής ενημέρωση επιλογών ομάδας.',
	'GROUP_USERS_ADDED'				=> 'Επιτυχής προσθήκη νέου μέλους στην ομάδα.',
	'GROUP_USERS_EXIST'				=> 'Τα επιλεγμένα μέλη ανήκουν ήδη στην ομάδα.',
	'GROUP_USERS_REMOVE'			=> 'Τα μέλη αφαιρέθηκαν από την ομάδα και νέες βασικές ρυθμίσεις αποθηκεύτηκαν.',

	'MAKE_DEFAULT_FOR_ALL'	=> 'Καθορίστε βασική ομάδα για κάθε μέλος',
	'MEMBERS'				=> 'Μέλη',

	'NO_GROUP'					=> 'Δεν επιλέχθηκε ομάδα.',
	'NO_GROUPS_CREATED'			=> 'Δεν έχουν δημιουργηθεί ομάδες ακόμα.',
	'NO_PERMISSIONS'			=> 'Μην εισάγετε τις προσβάσεις',
	'NO_USERS'					=> 'Δεν έχετε εισάγει κανένα μέλος.',
	'NO_USERS_ADDED'			=> 'Κανένα μέλος δεν προστέθηκε στην ομάδα.',
	'NO_VALID_USERS'			=> 'Δεν έχετε εισάγει κανένα επιλεγμένο μέλος για αυτήν την ενέργεια.',


	'SPECIAL_GROUPS'			=> 'Προκαθορισμένες ομάδες',
	'SPECIAL_GROUPS_EXPLAIN'	=> 'Οι προκαθορισμένες ομάδες είναι ειδικές ομάδες, δεν μπορούν να διαγραφούν, σβηστούν ή να αλλαχτούν. Μπορείτε όμως να προσθέσετε μέλη σε αυτές και να αλλάξετε βασικές ρυθμίσεις.',

	'TOTAL_MEMBERS'				=> 'Μέλη',

	'USERS_APPROVED'				=> 'Επιτυχής αποδοχή μέλους.',
	'USER_DEFAULT'					=> 'Προεπιλογές μέλους',
	'USER_DEF_GROUPS'				=> 'Ομάδες χαρακτηρισμού μελών',
	'USER_DEF_GROUPS_EXPLAIN'		=> 'Αυτές είναι ομάδες δημιουργημένες από εσάς ή άλλον διαχειριστή αυτής της κοινότητας. Μπορείτε να διαχειριστείτε τις συμμετοχές, τις επιλογές της ομάδας ή ακόμα και να το διαγράψετε.',
	'USER_GROUP_DEFAULT'			=> 'Ορισμός ως βασικής ομάδας',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> 'Επιλέγοντας Ναι ορίζετε αυτήν την ομάδα σαν βασική για τα προστιθέμενα μέλη.',
	'USER_GROUP_LEADER'				=> 'Ορισμός σαν συντονιστής ομάδας',
));

?>
