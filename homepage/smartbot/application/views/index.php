<h1>Welcom</h1>

<script>

	const fnc_updateData = function (save_data) {
        sbsHttp.beginSave();
        sbsHttp.put(API_URL + 'Biblio/edit/' + BIBID,
            angular.toJson(save_data))
            .then(function (res) {
                sbsHttp.endSave();
            });
    };
</script>


<input type="text" pattern="[0-9]+" ng-pattern-restrict />