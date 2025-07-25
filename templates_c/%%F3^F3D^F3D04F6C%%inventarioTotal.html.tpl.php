<?php /* Smarty version 2.6.20, created on 2025-07-01 00:15:22
         compiled from inventarioTotal.html.tpl */ ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title><?php echo $this->_tpl_vars['t']; ?>
</title>
</head>
<body>
    <div class="panel panel-info" style="margin-top: 150px;">
        <div class="panel-heading">
            <h3 align="left" style="color: white;">Inventario general</h3>
            <h3 class="panel-title" align="left"></h3>
        </div>

        <br>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <a href="reporteInventarioGeneral.php" data-toggle="tooltip" data-placement="top" title="Generar PDF" target="_blank">
                        <i class="fa fa-file-pdf-o fa-3x"></i>
                    </a>
                    Generar reporte de inventario general
                </div>
            </div>

            <table border="0" align="center" style="margin-left: 45px; margin-right: 30px;">
                <tr>
                    <td>
                        <div id="demo" style="margin-top: 50px;">
                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example" width="100%">
                                <thead>
                                    <tr>
                                        <th>Código</th>
                                        <th>Nombre</th>
                                        <th>Descripción</th>
                                        <th>Existencias</th>
                                        <th>Departamento</th>
                                        <th>Unitario</th>
                                        <th>Venta</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $_from = $this->_tpl_vars['productos']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['prod']):
?>
                                    <tr>
                                        <td><?php echo $this->_tpl_vars['prod']['codigo_producto']; ?>
</td>
                                        <td><?php echo $this->_tpl_vars['prod']['nombre_producto']; ?>
</td>
                                        <td><?php echo $this->_tpl_vars['prod']['descripcion']; ?>
</td>
                                        <td><?php echo $this->_tpl_vars['prod']['existencias_prod']; ?>
</td>
                                        <td><?php echo $this->_tpl_vars['prod']['id_departamento']; ?>
</td>
                                        <td><?php echo $this->_tpl_vars['prod']['precio_u']; ?>
</td>
                                        <td><?php echo $this->_tpl_vars['prod']['precio']; ?>
</td>
                                    </tr>
                                    <?php endforeach; endif; unset($_from); ?>
                                </tbody>

                                <tfoot>
                                    <tr>
                                        <th>Código</th>
                                        <th>Nombre</th>
                                        <th>Descripción</th>
                                        <th>Existencias</th>
                                        <th>Departamento</th>
                                        <th>Unitario</th>
                                        <th>Venta</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>