<style type="text/css">
  .tg  {border-collapse:collapse;border-spacing:0;}
  .tg td{
    border-color:black;
    border-style:solid;
    border-width:1px;
    overflow:hidden;
    padding:10px 5px;
    word-break:normal;
}
  .tg th{
    border-color:black;
    border-style:solid;
    border-width:1px;
    font-weight:normal;
    overflow:hidden;
    padding:10px 5px;
    word-break:normal;}

.button {
  font: bold 11px Arial;
  text-decoration: none;
  background-color: #EEEEEE;
  color: #333333;
  padding: 2px 6px 2px 6px;
  border-top: 1px solid #CCCCCC;
  border-right: 1px solid #333333;
  border-bottom: 1px solid #333333;
  border-left: 1px solid #CCCCCC;
}
</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Siswa &mdash; Sekolah Dasar</title>
</head>
    <body>
        <?php if (isset($app)): ?>
            <div id="app">
                    <div class="main-content">
                        <?php $this->load->view($app); ?>
                    </div>
                </div>
            </div>
            <?php ;else: ?>
                <?php $this->load->view($content); ?>
        <?php endif; ?>
    </body>

    

</html>
