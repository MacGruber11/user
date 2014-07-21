

$(document).ready(function() {
    $("input.typeahead-devs").typeahead({
        name: 'city',
        remote: {
            url: 'http://user/index.php/auth/city'
        }

    });
});

