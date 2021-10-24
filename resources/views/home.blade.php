<ul id="log"></ul>
<script src="{{ asset('js/app.js') }}"></script>
<script>
    Echo.channel('testing')
        .listen('HelloEvent', (e) => {
            console.log(e);
            msg(e);
        });

    function msg(message) {
        var node = document.createElement("li");
        var textnode = document.createTextNode(message);
        node.appendChild(textnode);
        document.getElementById("log").appendChild(node);
    }
</script>