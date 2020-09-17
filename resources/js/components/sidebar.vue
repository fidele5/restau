<template>
    <!-- Left Sidebar Menu -->
		<div class="fixed-sidebar-left">
			<ul class="nav navbar-nav side-nav nicescroll-bar">
				<li class="navigation-header">
					<span>Main</span> 
					<i class="zmdi zmdi-more"></i>
				</li>
				<li>
					<a class="active" href="javascript:void(0);" ><div class="pull-left"><span class="right-nav-text">Dashboard</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
				</li>
				
                <li><hr class="light-grey-hr mb-10"/></li>
				<li class="navigation-header">
					<span>Utilisateurs</span> 
					<i class="zmdi zmdi-more"></i>
				</li>
				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#app_dr"><div class="pull-left"><i class="fa fa-user mr-20"></i><span class="right-nav-text">Utilisateurs </span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
                    <ul id="app_dr" class="collapse collapse-level-1">
						<li> 
							<a href="chats.html">chats</a>
						</li>
						<li>
							<a href="calendar.html">calendar</a>
						</li>
                    </ul>
				</li>
				
				<li><hr class="light-grey-hr mb-10"/></li>
				<li class="navigation-header">
					<span>Statistiques</span> 
					<i class="zmdi zmdi-more"></i>
				</li>
			
				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#chart_dr"><div class="pull-left"><i class="zmdi zmdi-chart-donut mr-20"></i><span class="right-nav-text">Statistiques </span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="chart_dr" class="collapse collapse-level-1 two-col-list">
						<li>
							<a href="flot-chart.html">Flot Chart</a>
						</li>
						<li>
							<a href="morris-chart.html">Morris Chart</a>
						</li>
					</ul>
				</li>
                <li><hr class="light-grey-hr mb-10"/></li>
				<li class="navigation-header">
					<span>Articles</span> 
					<i class="zmdi zmdi-more"></i>
				</li>
				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#table_dr"><div class="pull-left"><i class="zmdi zmdi-settings mr-20"></i><span class="right-nav-text">Tables</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="table_dr" class="collapse collapse-level-1 two-col-list">
						<li>
							<a href="basic-table.html">Articles</a>
						</li>
						<li>
							<a href="bootstrap-table.html">Categories</a>
						</li>
						
                        <li>
							<a href="data-table.html">Taux</a>
						</li>
                        <li>
							<a href="data-table.html">Tarifs</a>
						</li>
					</ul>
				</li>
                <li><hr class="light-grey-hr mb-10"/></li>
				<li class="navigation-header">
					<span>Entites</span> 
					<i class="zmdi zmdi-more"></i>
				</li>
                <li>
					<a href="javascript:void(0);"><div class="pull-left"><i class="zmdi zmdi-home mr-20"></i><span class="right-nav-text">Salles</span></div><div class="clearfix"></div></a>
				</li>

                <li>
					<a href="javascript:void(0);"><div class="pull-left"><i class="zmdi zmdi-google-pages mr-20"></i><span class="right-nav-text">Tables</span></div><div class="clearfix"></div></a>
				</li>

                <li>
					<a href="javascript:void(0);"><div class="pull-left"><i class="zmdi zmdi-shopping-cart mr-20"></i><span class="right-nav-text">Point de vente</span></div><div class="clearfix"></div></a>
				</li>
				
				<li><hr class="light-grey-hr mb-10"/></li>
				<li class="navigation-header">
					<span>Commandes</span> 
					<i class="zmdi zmdi-more"></i>
				</li>
				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#pages_dr"><div class="pull-left"><i class="zmdi zmdi-shopping-basket mr-20"></i><span class="right-nav-text">Ventes</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="pages_dr" class="collapse collapse-level-1 two-col-list">
						<li>
							<a href="javascript:void(0);" data-toggle="collapse" data-target="#invoice_dr">Invoice<div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
						</li>
					</ul>
				</li>
                <li>
					<a href="javascript:void(0);" ><div class="pull-left"><i class="zmdi zmdi-google-pages mr-20"></i><span class="right-nav-text">Commades</span></div><div class="clearfix"></div></a>
				</li>

			</ul>
		</div>
		<!-- /Left Sidebar Menu -->
</template>