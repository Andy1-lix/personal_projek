<?= $this->include('admin/layout/v_header') ?>
<?= $this->include('admin/layout/v_navbar') ?>
<?= $this->include('admin/layout/v_sidebar') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <?= $this->include('admin/layout/v_header_content') ?>
  <?= $this->renderSection('content') ?>
</div>
<!-- /.content-wrapper -->
<?= $this->include('admin/layout/v_footer') ?>