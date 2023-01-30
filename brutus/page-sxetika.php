<?php
/**
 * Template file for About page in greek.
 *
 * This template is also assigned to About page in english via
 * functions.php:set_custom_templates(). We will be providing a translation
 * through brutus.pot
 *
 * @package brutus
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="about-container">
        <div class="category-container">
            <div class="summary-button"><?php esc_html_e( 'Περιγραφή Έργου', 'brutus' ) ?></div>
            <div class="partners-button"><?php esc_html_e( 'Εταίροι', 'brutus' ) ?></div>
        </div>
        <div class="content-container">
            <div class="summary-content">
                <p><?php esc_html_e( 'Η Ελλάδα και η Ιταλία διαθέτουν σημαντικά πολιτιστικά και φυσικά κεφάλαια που είναι ικανά να συμβάλλουν στην ενίσχυση της οικονομικής τους ανάπτυξης και στην βελτίωση της ποιότητας ζωής των πολιτών.', 'brutus' ) ?></p>
                <p><?php esc_html_e( 'Ο στόχος του Creative@Hubs είναι η καθιέρωση της αυξημένης συνέργειας μεταξύ Δημιουργικών Βιομηχανιών και Δημοσίων Αρχών, προκειμένου να συμβάλλουν στην ικανότητα των Περιφερειών να δημιουργούν νέες τεχνογνωσίες και να παράγουν καινοτομία. Οι Δημιουργικές Βιομηχανίες (ΔΒ) - που περιλαμβάνουν διαφήμιση, μαρκετινγκ, αρχιτεκτονική, τέχνες και χειροτεχνίες, σχεδιασμό, μόδα, ταινία, βίντεο, φωτογραφία, μουσική, παραστατικές τέχνες, εκδόσεις, έρευνα & ανάπτυξη, λογισμικό, ηλεκτρονικά παιχνίδια, ηλεκτρονικές εκδόσεις και τηλεόραση / ραδιόφωνο - συγκαταλέγονται στους πιο δυναμικούς τομείς της παγκόσμιας οικονομίας, παρέχοντας νέες εκαιρίες στις αναπτυσσόμενες χώρες να προχωρήσουν σε αναδυόμενες περιοχές με υψηλή ανάπτυξη της παγκόσμιας οικονομίας. Τέλος θεωρούνται μια πολύ σημαντική πηγή εμπορικής και πολιτιστικής αξίας.', 'brutus' ) ?></p>
                <h2><?php esc_html_e( 'Ειδικοί στόχοι', 'brutus' ) ?></h2>
                <ol>
                    <li><?php esc_html_e( 'Ενθάρρυνση & υποστήριξη της συνεργασίας μέσω βέλτιστων συνεργειών μεταξύ διαφορετικών Αρχών, που είναι αρμόδιες για τις Δημιουργικές Βιομηχανίες.', 'brutus' ) ?></li>
                    <li><?php esc_html_e( 'Βελτιώση της συνεργασίας στους τομείς επιλεγμένων περιοχών για την δημιουργία δημιουργικών επιχειρηματιών & πόρων στον τομέα των καινοτόμων βιομηχανιών και για την προώθηση της καινοτομίας μέσω των υφιστάμενων τοπικών συστημάτων (συστάδων, εργαστηριών, πανεπιστημίων, επιστημονικών πάρκων κ.λπ.).', 'brutus' ) ?></li>
                    <li><?php esc_html_e( 'Ενίσχυση της επιχειρηματικότητας στην ανάπτυξη νέων δημιουργικών προτύπων στις στοχευμένες Δημιουργικές Βιομηχανίες από ΜμΕ & δικτύωση τους, συγκεντρώνοντας πόρους που σχετίζονται με την ανάπτυξη τους.', 'brutus' ) ?></li>
                </ol>
                <p><?php esc_html_e( 'Στο πλαίσιο υλοποίησης του έργου, 8 κτίρια θα μετατραπούν σε ανακαινισμένα και λειτουργικά παρεμβατικά κέντρα, τα οποία θα λειτουργήσουν ως νέοι κόμβοι και θερμοκοιτίδες στις περιφέρειες όλων των εταίρων με πλήρη διοικητική υποστήριξη, καθώς και πλήρη υποστήριξη δομών και δικτύων διασυνοριακής συνεργασίας που σχετίζονται με την καινοτομία.', 'brutus' ) ?></p>
            </div>
            <div class="partners-content">
                <a href="https://www.pde.gov.gr/" target="_blank">
                    <img src="https://creativehubs.gr/wp-content/uploads/2023/01/Region-of-Western-Greece.png" alt="Region of Western Greece logo">
                </a>
                <a href="https://pin.gov.gr/" target="_blank">
                    <img src="https://creativehubs.gr/wp-content/uploads/2023/01/Region-of-Ionian-Islands.png" alt="Region of Ionian Islands logo">
                </a>
                <a href="http://www.php.gov.gr/" target="_blank">
                    <img src="https://creativehubs.gr/wp-content/uploads/2023/01/Region-of-Epirus.png" alt="Region of Epirus logo">
                </a>
                <a href="https://www.regione.puglia.it/" target="_blank">
                    <img src="https://creativehubs.gr/wp-content/uploads/2023/01/Puglia-Region.png" alt="Region of Puglia logo">
                </a>
            </div>
        </div>
    </div>
</main> <!-- .site-main -->

<?php
get_footer();