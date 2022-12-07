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
    <!-- The modal -->
    <div id="modal" class="modal">
      <form id="address-form">
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" autocomplete="off">
        <br><br>
        <button type="button" id="submit-button">Submit</button>
      </form>
    </div>

    <script>
      // Use the jQuery-Modal library's open method to open the modal
      // when the page loads
      $('#modal').modal('open');

      // Attach a click event to the submit button that closes the modal
      $('#submit-button').on('click', function() {
        $('#modal').modal('close');
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
