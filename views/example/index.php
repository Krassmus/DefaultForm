<form class="default">
    <!-- Optionaler Header -->
    <header>
        <h2>test</h2>
    </header>

    <!-- einfach -->

    <label>
        <span class="required">Überschrift</span>
        <input type="text">
    </label>

    <label>
        <span class="required">Hausnummer</span>
        <?= tooltipIcon(_('Bitte geben Sie hier nur eine Zahl ein')) ?>
        <input type="number">
    </label>

    <!-- alternativ -->
    <label for="house" class="required">Hausnummer</label>
    <input type="number" id="house" required>

    <label>
        Beschreibung für die Liste der Checkboxen
    </label>

    <label>
        <input type="checkbox">
        Ich habe die allgemeinen Geschäftsbedingungen gelesen
    </label>

    <label>
        <input type="checkbox">
        Ja, ich möchte regelmäßig Werbung zugeschickt bekommen
    </label>

    <!-- erweitert -->

    <fieldset>
        <legend>Test (default = size-m)</legend>

        <label>
            Einrichtung
            <input type="text">
        </label>

        <label>
            Lebenslauf
            <textarea></textarea>
        </label>

        <label class="file-upload">
            Lebenslauf (Datei)
            <input type="file">
        </label>

    </fieldset>

    <fieldset>
        <label>
            Einrichtung
            <input type="text" class="size-l">
        </label>

        <label>
            Lebenslauf
            <textarea class="size-l"></textarea>
        </label>

    </fieldset>

    <footer>
        <?= \Studip\Button::create(_("Speichern")) ?>
    </footer>
</form>
