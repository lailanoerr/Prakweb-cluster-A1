<html>
<head>
    <title>User PABW</tile>
</head>
<body>
    <table border="0" cellpading="10" cellspacing="1" width="100%">
        <tr>
            <td align="center">User Dashboard</td>
        </tr>
        <tr>
            <td>
            Selamat datang <?= $this->session->userdata('username');?>.
            Klik disini untuk<a href="<?=base_url('user/logout');?>" tite="Logout"> Logout.
            </td>
        </tr>
</body>
</html>