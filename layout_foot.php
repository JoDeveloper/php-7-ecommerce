            </div>
  

        </div>

        <script src="libs/js/jquery.min.js"></script>

        <script src="libs/js/bootstrap.min.js"></script>

        <script>
          $(document).ready(function(){
   
            $('.update-quantity-form').on('submit', function(){
              var id = $(this).find('.product-id').text();
              var quantity = $(this).find('.cart-quantity').val();

              window.location.href="update_quantity.php?id=" + id + "&quantity=" + quantity;
              return false;
            });
          });
        </script>

</body>
</html>
