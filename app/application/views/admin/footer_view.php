   
	<!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              &copy; Admin panel by fcsc.
              <a href="#" class="go-top">
                  <i class="icon-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url("assets/js/jquery.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url("assets/js/jquery.dcjqaccordion.2.7.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/jquery.scrollTo.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/js/jquery.nicescroll.js"); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url("assets/js/respond.min.js"); ?>" ></script>

    <!--common script for all pages-->
    <script src="<?php echo base_url("assets/js/common-scripts.js"); ?>"></script>
    <!-- custom js -->
    <?php 
        echo isset($p_custom_js) ? $p_custom_js : "";
    ?>

  </body>
</html>