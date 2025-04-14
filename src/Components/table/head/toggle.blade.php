<th width="1%">
    <i onclick="toggle()" class="bi bi-toggle-off" id="toggle"></i>

    {{ $slot }}

</th>

@pushOnce('scripts')
    <script>
        function toggle() {

            let checkboxes = document.querySelectorAll('input[type="checkbox"]');
            checkboxes.forEach(box => {
                box.checked = box.checked ? false : true;
            });

            var toggle = document.getElementById("toggle");
            var toggleClass = toggle.className;
            console.log(toggleClass);
            if (toggleClass == "bi bi-toggle-off") {
                console.log('1');
                toggle.className = "bi bi-toggle-on";
            } else {
                console.log('2');
                toggle.className = "bi bi-toggle-off";
            }

        }
    </script>
@endPushOnce
