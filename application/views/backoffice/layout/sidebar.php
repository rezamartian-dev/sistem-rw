<!-- Menu -->
<aside id='layout-menu' class='layout-menu menu-vertical menu bg-menu-theme'>
	<div class='app-brand demo'>
		<a href='javascript:void(0)' class='app-brand-link' >
              <span class='app-brand-logo demo'>
		<img src="<?=base_url()?>assets/backoffice/logo.png" style="height:70px;width:100%"/>
              </span>
			<span class='app-brand-text demo menu-text fw-bolder ms-2 titleSite'><?= ucwords($this->session->nama) ?></span>
		</a>
		<a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
			<i class="bx bx-chevron-left bx-sm align-middle"></i>
		</a>
	</div>

	<div class="menu-inner-shadow"></div>

	<ul class="menu-inner py-1">
		<?php $uriParent = $this->uri->segment(2);
		$uriChild = $this->uri->segment(3);

		$menu = [	
				['icon' => 'bx-chart', 'title' => 'Dashboard','controller'=>'dashboard', 'child' => []],
				['icon' => 'bx-cog', 'title' => 'Pengaturan','controller'=>'pengaturan', 'child' => []],
				[
					'icon' => 'bx-folder', 
					'title' => 'Master Data',
					'controller'=>'setting',
					'child' => [
						[
							'icon' => 'bx-cog', 
							'title' => 'Warga',
							'controller'=>'warga',
						],
						[
							'icon' => 'bx-cog', 
							'title' => 'Agama',
							'controller'=>'agama',
							
						],
						[
							'icon' => 'bx-cog', 
							'title' => 'Golongan Darah',
							'controller'=>'golongan_darah',
							
						],
						[
							'icon' => 'bx-cog', 
							'title' => 'Pekerjaan',
							'controller'=>'pekerjaan',
						],
						[
							'icon' => 'bx-cog', 
							'title' => 'Bantuan',
							'controller'=>'bantuan',
						],
						[
							'icon' => 'bx-cog', 
							'title' => 'Status Keluarga',
							'controller'=>'status_keluarga',
						],
						
					]
				],
		] ?>
		<?php foreach ($menu as $val): $titleParent = str_replace(' ', '', strtolower($val['title']));

			if (count($val['child']) == 0): ?>
				<li class="menu-item <?= $uriParent==$val['controller']?'active':'' ?>">
					<a href='<?=base_url()?>backoffice/<?=$val["controller"]?>' class='menu-link '  >
						<i class="menu-icon tf-icons bx <?= $val['icon'] ?>"></i>
						<div data-i18n='Analytics'><?= ucwords($val['title']) ?></div>
					</a>
				</li>
			<?php else: ?>
				<li class="menu-item <?=$uriParent==$titleParent?'open':null?>">
					<a href="javascript:void(0);" class="menu-link menu-toggle">
						<i class="menu-icon tf-icons bx <?= $val['icon'] ?>"></i>
						<div data-i18n="Account Settings"><?= $val['title'] ?></div>
					</a>
					<ul class="menu-sub">
						<?php foreach ($val['child'] as $item): ?>
							<li class="menu-item <?=$uriChild==$item['controller']?'active':null?>">
								<a href="<?=base_url('backoffice/'.$titleParent.'/'.$item['controller'])?>" class="menu-link">
									<div data-i18n="Account"><?=$item['title'] ?></div>
								</a>
							</li>
						<?php endforeach; ?>
					</ul>
				</li>
			<?php endif;endforeach; ?>
	</ul>
</aside>
<!-- / Menu -->

<script>

</script>
