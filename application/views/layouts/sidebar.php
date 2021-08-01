    <!--**********************************
            Sidebar start
        ***********************************-->
    <div class="deznav">
      <div class="deznav-scroll">
        <ul class="metismenu" id="menu">

          <!-- Query Menu  -->
          <?php
          $role_id = $this->session->userdata('role_id');
          $queryMenu = "SELECT `user_menu`.`id`, `menu`
                          FROM `user_menu` 
                          JOIN `user_access_menu` ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                        WHERE `user_access_menu`.`role_id` = $role_id
                        ORDER BY `user_access_menu`.`menu_id` ASC
                        ";
          $menu = $this->db->query($queryMenu)->result_array();
          ?>

          <!-- Looping Menu  -->
          <?php foreach ($menu as $m) : ?>
            <span class="nav-text text-seconday ml-4">
              <strong>
                <?= $m['menu']; ?>
              </strong>
            </span>

            <!-- Siapkan Sub Menu Sesuai Menu  -->
            <?php
            $menuId = $m['id'];
            $querySubMenu = "SELECT *
                              FROM `user_sub_menu` 
                              JOIN `user_menu` ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                            WHERE `user_sub_menu`.`menu_id` = $menuId
                            AND `user_sub_menu`.`is_active` = 1
                            ";
            $subMenu = $this->db->query($querySubMenu)->result_array();
            ?>

            <!-- Looping Sub Menu  -->
            <?php foreach ($subMenu as $sm) : ?>
              <li>
                <a href="<?= base_url($sm['url']); ?>" class="ai-icon" aria-expanded="false">
                  <i class="<?= $sm['icon']; ?>"></i>
                  <span class="nav-text"><?= $sm['title']; ?></span>
                </a>
              </li>
            <?php endforeach; ?>

          <?php endforeach; ?>
         
        </ul>

        <div class="copyright fixed-bottom">
          <small><strong>CodeIgniter - Login System</strong></small><br>
          <small>© 2021 Qkoh St</small>
        </div>
      </div>
    </div>
    <!--**********************************
            Sidebar end
    ***********************************-->