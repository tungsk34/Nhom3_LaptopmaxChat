    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../views/js/main2.js"></script>
    <script>
        // Get the input element
        var numberInput = document.getElementById('numberInput');

        // Add event listener for input change
        numberInput.addEventListener('change', function() {
            // Check if the value is less than 0
            if (parseInt(this.value) < 0) {
                // If less than 0, set value to 0
                this.value = 0;
            }
        });
    </script>

    </body>

    </html>