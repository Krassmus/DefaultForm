<form class="default">
    <!-- Optionaler Header -->
    <header>
        <h2>test</h2>
    </header>

    <!-- einfach -->

    <label>
        Hausnummer
        <input type="number">
    </label>

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

    <footer>
        <button><?= \Studip\Button::create(_("Speichern")) ?></button>
    </footer>
</form>