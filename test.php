<html>
  <head>
    <title>Modal with Auto-Complete Form</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-autocomplete/1.0.7/jquery.auto-complete.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <style>
      /* Style the modal */
      .modal {
        width: 50%;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        background-color: #fefefe;
      }
    </style>
  </head>
  <body>
    <!-- Button that opens the modal -->
    <button id="modal-button">Open Modal</button>

    <!-- The modal -->
    <div id="modal" class="modal">
      <form id="address-form">
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" autocomplete="off">
      </form>
    </div>

    <script>
      // Attach a click event to the button that opens the modal
      $('#modal-button').on('click', function() {
        $('#modal').modal();
      });

      // Use PHP to fetch a list of addresses from a database or file
      // and store it in a JavaScript array
      var addresses = <?php echo json_encode(get_addresses_from_database()); ?>;

      // Initialize the auto-complete plugin on the address field
      $('#address').autoComplete({
        minChars: 1,
        source: function(term, suggest){
            term = term.toLowerCase();
            var choices = addresses;
            var suggestions = [];
            for (i=0;i<choices.length;i++)
                if (~choices[i].toLowerCase().indexOf(term)) suggestions.push(choices[i]);
            suggest(suggestions);
        }
      });
    </script>
  </body>
</html>