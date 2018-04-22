<!-- APP ASIDE ==========-->
<aside id="app-aside" class="app-aside left light">
	<header class="aside-header">
		<div class="animated">
			<a href="http://envato.rathemes.com/infinity/index.html" id="app-brand" class="app-brand">
				<span id="brand-icon" class="brand-icon"><i class="fa fa-gg"></i></span>
				<span id="brand-name" class="brand-icon foldable">Đại Lý Căn Hộ</span>
			</a>
		</div>
	</header><!-- #sidebar-header -->

	<div class="aside-user">
		<!-- aside-user -->
		<div class="media">
			<div class="media-left">
				<div class="avatar avatar-md avatar-circle">
					<a href="javascript:void(0)">{{ Html::image('/assets/backend/images/221.jpg', 'avatar', array('class' => 'img-responsive')) }}</a>
				</div><!-- .avatar -->
			</div>
			<div class="media-body">
				<div class="foldable">
					<h5><a href="javascript:void(0)" class="username">John Doe</a></h5>
					<ul>
						<li class="dropdown">
							<a href="javascript:void(0)" class="dropdown-toggle usertitle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<small>Web Developer</small>
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu animated flipInY">
								<li>
									<a class="text-color" href="http://envato.rathemes.com/index.html">
										<span class="m-r-xs"><i class="fa fa-home"></i></span>
										<span>Home</span>
									</a>
								</li>
								<li>
									<a class="text-color" href="profile.html">
										<span class="m-r-xs"><i class="fa fa-user"></i></span>
										<span>Profile</span>
									</a>
								</li>
								<li>
									<a class="text-color" href="settings.html">
										<span class="m-r-xs"><i class="fa fa-gear"></i></span>
										<span>Settings</span>
									</a>
								</li>
								<li role="separator" class="divider"></li>
								<li>
									<a class="text-color" href="{{ url('/logout') }}">
										<span class="m-r-xs"><i class="fa fa-power-off"></i></span>
										<span>Home</span>
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /aside-user -->
	</div><!-- #aside-user -->

	<div class="aside-scroll">
		<div id="aside-scroll-inner" class="aside-scroll-inner">
			<ul class="aside-menu aside-left-menu">
				<li class="menu-item has-submenu">
					<a href="javascript:void(0)" class="menu-link submenu-toggle">
						<span class="menu-icon"><i class="zmdi zmdi-view-dashboard zmdi-hc-lg"></i></span>
						<span class="menu-text foldable">Tổng quan</span>
						<span class="menu-caret foldable"><i class="zmdi zmdi-hc-sm zmdi-chevron-right"></i></span>
					</a>
					<ul class="submenu">
						<li><a href="index.html">Dashboard 1</a></li>
						<li><a href="dashboard.2.html">Dashboard 2</a></li>
					</ul>
				</li><!-- .menu-item -->

				<li class="menu-item has-submenu">
					<a href="javascript:void(0)" class="menu-link submenu-toggle">
						<span class="menu-icon"><i class="zmdi zmdi-layers zmdi-hc-lg"></i></span>
						<span class="menu-text foldable">Cấu hình</span>
						<span class="menu-caret foldable"><i class="zmdi zmdi-hc-sm zmdi-chevron-right"></i></span>
					</a>
					<ul class="submenu">
						<li><a href="index.html">Default</a></li>
						<li><a href="http://envato.rathemes.com/infinity/topbar/index.html">Topbar</a></li>
					</ul>
				</li><!-- .menu-item -->

				<li class="menu-item has-submenu">
					<a href="javascript:void(0)" class="menu-link submenu-toggle">
						<span class="menu-icon"><i class="zmdi zmdi-puzzle-piece zmdi-hc-lg"></i></span>
						<span class="menu-text foldable">UI Kit</span>
						<span class="menu-caret foldable"><i class="zmdi zmdi-hc-sm zmdi-chevron-right"></i></span>
					</a>
					<ul class="submenu">
						<li><a href="buttons.html">Buttons</a></li>
						<li><a href="alerts.html">Alerts</a></li>
						<li><a href="panels.html">Panels</a></li>
						<li><a href="lists.html">Lists</a></li>
						<li><a href="icons.html">Icons</a></li>
						<li><a href="media.html">Media</a></li>
						<li><a href="widgets.html">Widgets</a></li>
						<li><a href="tabs.html">Tabs &amp; Accordions</a></li>
						<li><a href="progress.html">Progress</a></li>
					</ul>
				</li><!-- .menu-item -->

				<li class="menu-item has-submenu">
					<a href="javascript:void(0)" class="menu-link submenu-toggle">
						<span class="menu-icon"><i class="zmdi zmdi-inbox zmdi-hc-lg"></i></span>
						<span class="menu-text foldable">Mail Box</span>
						<span class="menu-caret foldable"><i class="zmdi zmdi-hc-sm zmdi-chevron-right"></i></span>
					</a>
					<ul class="submenu">
						<li><a href="inbox.html">Inbox <span class="badge bg-primary menu-label">12</span></a></li>
						<li><a href="compose.html">Compose</a></li>
					</ul>
				</li><!-- .menu-item -->

				<li class="menu-item">
					<a href="search.web.html" class="menu-link">
						<span class="menu-icon"><i class="zmdi zmdi-search zmdi-hc-lg"></i></span>
						<span class="menu-text foldable">Search</span>
					</a>
				</li><!-- .menu-item -->

				<li class="menu-item has-submenu">
					<a href="javascript:void(0)" class="menu-link submenu-toggle">
						<span class="menu-icon"><i class="zmdi zmdi-pages zmdi-hc-lg"></i></span>
						<span class="menu-text foldable">Pages</span>
						<span class="menu-caret foldable"><i class="zmdi zmdi-hc-sm zmdi-chevron-right"></i></span>
					</a>
					<ul class="submenu">
						<li><a href="profile.html">Profile</a></li>
						<li><a href="price.html">Prices</a></li>
						<li><a href="invoice.html">Invoice</a></li>
						<li><a href="gallery.1.html">Gallery</a></li>
						<li><a href="gallery.2.html">Gallery 2</a></li>
						<li><a href="support.html">FAQ</a></li>
					</ul>
				</li><!-- .menu-item -->

				<li class="menu-item has-submenu">
					<a href="javascript:void(0)" class="menu-link submenu-toggle">
						<span class="menu-icon"><i class="zmdi zmdi-check zmdi-hc-lg"></i></span>
						<span class="menu-text foldable">Forms</span>
						<span class="menu-caret foldable"><i class="zmdi zmdi-hc-sm zmdi-chevron-right"></i></span>
					</a>
					<ul class="submenu">
						<li><a href="form.layouts.html">Form Layouts</a></li>
						<li><a href="form.elements.html">Form Elements</a></li>
						<li><a href="form.custom.html">Customized Elements</a></li>
						<li><a href="form.plugins.html">Form Plugins</a></li>
						<li><a href="file-upload.html">File Upload</a></li>
						<li><a href="form.datetime.html">DateTime Pickers</a></li>
						<li><a href="editors.html">Editors</a></li>
					</ul>
				</li><!-- .menu-item -->

				<li class="menu-item has-submenu">
					<a href="javascript:void(0)" class="menu-link submenu-toggle">
						<span class="menu-icon"><i class="zmdi zmdi-storage zmdi-hc-lg"></i></span>
						<span class="menu-text foldable">Tables</span>
						<span class="menu-caret foldable"><i class="zmdi zmdi-hc-sm zmdi-chevron-right"></i></span>
					</a>
					<ul class="submenu">
						<li><a href="tables.basic.html">Basic Tables</a></li>
						<li><a href="datatables.html">DataTables</a></li>
					</ul>
				</li><!-- .menu-item -->

				<li class="menu-item has-submenu">
					<a href="javascript:void(0)" class="menu-link submenu-toggle">
						<span class="menu-icon"><i class="zmdi zmdi-chart zmdi-hc-lg"></i></span>
						<span class="menu-text foldable">Charts</span>
						<span class="menu-caret foldable"><i class="zmdi zmdi-hc-sm zmdi-chevron-right"></i></span>
					</a>
					<ul class="submenu">
						<li><a href="charts.flot.html">Flot Charts</a></li>
						<li><a href="echarts.bar.html">Bar echarts</a></li>
						<li><a href="echarts.pie.html">Pie echarts</a></li>
						<li><a href="echarts.line.html">Line echarts</a></li>
						<li><a href="echarts.map.html">Map echarts</a></li>
						<li><a href="echarts.scatter.html">Scatter echarts</a></li>
						<li><a href="echarts.custom.html">Custom echarts</a></li>
					</ul>
				</li><!-- .menu-item -->

				<li class="menu-item has-submenu">
					<a href="javascript:void(0)" class="menu-link submenu-toggle">
						<span class="menu-icon"><i class="zmdi zmdi-pin zmdi-hc-lg"></i></span>
						<span class="menu-text foldable">Maps</span>
						<span class="menu-caret foldable"><i class="zmdi zmdi-hc-sm zmdi-chevron-right"></i></span>
					</a>
					<ul class="submenu">
						<li><a href="map-google.html">Google Maps</a></li>
						<li><a href="map-vector.html">Vector Maps</a></li>
					</ul>
				</li><!-- .menu-item -->

				<li class="menu-item has-submenu">
					<a href="javascript:void(0)" class="menu-link submenu-toggle">
						<span class="menu-icon"><i class="zmdi zmdi-apps zmdi-hc-lg"></i></span>
						<span class="menu-text foldable">Apps</span>
						<span class="menu-caret foldable"><i class="zmdi zmdi-hc-sm zmdi-chevron-right"></i></span>
					</a>
					<ul class="submenu">
						<li><a href="calendar.html">Calendar</a></li>
						<li><a href="contacts.html">Contacts</a></li>
					</ul>
				</li><!-- .menu-item -->

				<li class="menu-item has-submenu">
					<a href="javascript:void(0)" class="menu-link submenu-toggle">
						<span class="menu-icon"><i class="zmdi zmdi-plus zmdi-hc-lg"></i></span>
						<span class="menu-text foldable">Extras</span>
						<span class="menu-caret foldable"><i class="zmdi zmdi-hc-sm zmdi-chevron-right"></i></span>
					</a>
					<ul class="submenu">
						<li><a href="login.html">Login</a></li>
						<li><a href="signup.html">Sign Up</a></li>
						<li><a href="password-forget.html">Reset Password</a></li>
						<li><a href="unlock.html">Unlock Screen</a></li>
						<li><a href="404.html">404 Error</a></li>
					</ul>
				</li><!-- .menu-item -->
			</ul>
			<hr>
			<footer id="aside-footer">
				<ul class="aside-menu aside-left-menu">
					<li class="menu-item">
						<a href="documentation.html" class="menu-link">
							<span class="menu-icon"><i class="zmdi zmdi-file-text zmdi-hc-lg"></i></span>
							<span class="menu-text foldable">Documentation</span>
						</a>
					</li><!-- .menu-item -->

					<li class="menu-item">
						<a href="javascript:void(0)" class="menu-link">
							<span class="menu-icon"><i class="zmdi zmdi-settings zmdi-hc-lg"></i></span>
							<span class="menu-text foldable">Settings</span>
						</a>
					</li><!-- .menu-item -->

					<li class="menu-item">
						<a href="javascript:void(0)" class="menu-link">
							<span class="menu-icon"><i class="zmdi zmdi-language-javascript zmdi-hc-lg"></i></span>
							<span class="menu-text foldable">Angular Version</span>
						</a>
					</li><!-- .menu-item -->
				</ul>
			</footer><!-- #sidebar-footer -->
		</div><!-- .aside-scroll-inner -->
	</div><!-- #aside-scroll -->
</aside>
<!--========== END app aside -->
