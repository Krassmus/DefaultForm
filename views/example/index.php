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