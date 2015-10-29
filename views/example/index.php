<form class="default columns-300">
    <!-- Optionaler Header -->
    <header>
        <h2>test</h2>
    </header>

    <!-- einfach -->

    <label>
        <span class="required">Hausnummer</span>
        <input type="number">
        <?= tooltipIcon(_('Bitte geben Sie hier nur eine Zahl ein')) ?>
        <span class="tooltip-content">Bitte geben Sie hier nur eine Zahl ein</span>
    </label>

    <!-- alternativ -->
    <section class="required">
        <label for="house">Hausnummer</label>
        <input type="number" id="house" required>
    </section>

    <label>
        Beschreibung f�r die Liste der Checkboxen
    </label>

    <label>
        <input type="checkbox">
        Ich habe die allgemeinen Gesch�ftsbedingungen gelesen
    </label>

    <label>
        <input type="checkbox">
        Ja, ich m�chte regelm��ig Werbung zugeschickt bekommen
    </label>

    <!-- erweitert -->

    <fieldset>
        <legend>test</legend>

        <label>
            Hausnummer
            <input type="number">
        </label>

        <label>
            Lebenslauf
            <textarea></textarea>
        </label>

    </fieldset>

    <fieldset>
        <label>
            Hausnummer
            <input type="number">
        </label>

        <label>
            Lebenslauf
            <textarea></textarea>
        </label>

    </fieldset>

    <footer>
        <?= \Studip\Button::create(_("Speichern")) ?>
    </footer>
</form>