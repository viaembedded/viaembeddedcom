jQueryWP("document").ready( function() {
    var target = maillist.target // customize from WP
    var form = jQueryWP("#mc-embedded-subscribe-form");
    if (form[0]) {
        form.find(":input").each(function () {
            var label = form.find("label[for='" + jQueryWP(this).attr("id") + "']");
            if (label.text() === target) {
                jQueryWP(this).prop("checked", true);
            }
        });
    }
});
