<!-- Textillate du titre-->
  <script type="text/javascript">
    $(function() {
      $('.titre').textillate({ in: {
          effect: 'fadeInLeftBig',
          delay: 50
        }
      });
      $('.soustitre').textillate({ in: {
          effect: 'rollIn',
          delay: 10
        },
        out: {
          effect: 'rollOut',
          initialDelay: 50,
          delay: 20
        },
        loop: true
      });
      $('[data-toggle="tooltip"]').tooltip()
    })

  </script>