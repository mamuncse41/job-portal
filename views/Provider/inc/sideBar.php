
<div class="sidebar sidebar-main">
                        <div class="sidebar-content">

                            <!-- User menu -->
                            <div class="sidebar-user">
                                <div class="category-content">
                                    <div class="media">
                                        <a href="#" class="media-left"></a>
                                        <div class="media-body">
                                            <span class="media-heading text-semibold"></span>

                                        </div>

                                        <div class="media-right media-middle">
                                            <ul class="icons-list">
                                                <li>
                                                  

                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /user menu -->


                            <!-- Main navigation -->
                            <div class="sidebar-category sidebar-category-visible">
                                <div class="category-content no-padding">
                                    <ul class="navigation navigation-main navigation-accordion">

                                        <!-- Main -->
                                        <li class="navigation-header"><span>Company Account</span> <i class="icon-menu" title="Main pages"></i></li>
                                        <li>
                                            <a href="../Users/about_company.php?id=<?php echo $_SESSION['user_info']['unique_id']; ?>"><i class="icon-home4"></i> <span>About Company</span></a>
                                           
                                        </li>
                                        <li>
                                            <a href="../Users/edit.php?id=<?php echo $_SESSION['user_info']['unique_id'];?>"><i class="icon-magazine"></i> <span>Edit Account</span></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="icon-insert-template"></i> <span>Job Post</span></a>
                                          <ul>
                                              <li><a href="../jobPost/addPost.php?id=<?php echo $_SESSION['user_info']['unique_id'];?>">New Job</a></li>
                                              <li><a href="../jobPost/managePost.php?id=<?php echo $_SESSION['user_info']['unique_id'];?>">Manage Job</a></li>
                                            </ul>
                                        </li>

                                        <li>
                                            <a href="../Users/change_password.php?id=<?php echo $_SESSION['user_info']['unique_id'];?>"><i class="icon-cash3"></i> <span>Change Password</span></a>
           
                                        </li>
                             
                                    </ul>
                                </div>
                            </div>
                            <!-- /main navigation -->

                        </div>
                    </div>

