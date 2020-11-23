<?php
$data['links'] = $links;
$data['role'] = $role;
$this->load->view('admin/header', $data);
?>

<?php
echo "<h1>".ucfirst($role)." Dashboard</h1>
<p>
	Welcome, ".ucfirst($name)."
</p>"
?>

<?php
$this->load->view('admin/footer');
?>
