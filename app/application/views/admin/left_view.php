      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  
                  <li class="sub-menu">
                      <a href="javascript:;" class="active" >
                          <i class=" icon-dashboard"></i>
                          <span><?php echo $this->lang->line(LANG_HORSE_RACING); ?></span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo base_url("admin/dashboard"); ?>"><?php echo $this->lang->line(LANG_TRANS_HISTORY); ?></a></li>
                          <li><a  href="<?php echo base_url("admin/add_agent"); ?>"><?php echo $this->lang->line(LANG_ADD_AGENT); ?></a></li>
                          <li><a  href="<?php echo base_url("admin/add_user"); ?>"><?php echo $this->lang->line(LANG_ADD_USER); ?></a></li>
                          <li><a  href="<?php echo base_url("admin/show_all"); ?>"><?php echo $this->lang->line(LANG_SHOW_ALL); ?></a></li>
                          <li><a  href="<?php echo base_url("admin/report"); ?>"><?php echo $this->lang->line(LANG_REPORT); ?></a></li>
                          <li><a  href="<?php echo base_url("admin/gen_statement"); ?>"><?php echo $this->lang->line(LANG_GEN_STATEMENT); ?></a></li>
                      </ul>
                  </li>
                  <li>
                      <a  href="<?php echo base_url("admin/supper_login"); ?>">
                          <i class="icon-key"></i>
                          <span><?php echo $this->lang->line(LANG_LOGOUT); ?></span>
                      </a>
                  </li>
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->