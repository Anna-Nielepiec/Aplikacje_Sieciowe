{extends file="templates/home.tpl"}

{block name=content}


<form class="pure-form pure-form-stacked" action="{$conf->action_root}searchAvailability" method="get">
    <fieldset>
        <div class="pure-control-group">
            <label for="search_date">Data:</label>
            <input type="date" id="search_date" name="search_date" required />
        </div>

        <div class="pure-control-group">
            <label for="search_timeslot">Przedział godzinowy:</label>
            <select id="search_timeslot" name="search_timeslot" required>
                <option value="">-- wybierz --</option>
                <option value="12-13">12:00 - 13:00</option>
                <option value="13-14">13:00 - 14:00</option>
                <option value="14-15">14:00 - 15:00</option>
                <option value="15-16">15:00 - 16:00</option>
                <option value="16-17">16:00 - 17:00</option>
                <option value="17-18">17:00 - 18:00</option>
                <option value="18-19">18:00 - 19:00</option>
                <option value="19-20">19:00 - 20:00</option>
                <option value="20-21">20:00 - 21:00</option>
                <option value="21-22">21:00 - 22:00</option>
            </select>
        </div>

        <div class="pure-control-group">
            <label for="search_people">Liczba osób:</label>
            <select id="search_people" name="search_people" required>
                <option value="">-- wybierz --</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
            </select>
        </div>

        <div class="pure-controls">
            <button type="submit" class="pure-button pure-button-primary">Szukaj</button>
        </div>
    </fieldset>
</form>
{/block}