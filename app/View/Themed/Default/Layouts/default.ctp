<?php
/**
 * @var View $this
 */
?>
<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		Beleid
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array('bootstrap.min'));
        echo $this->Html->script(array('jquery-2.1.1.min', 'bootstrap.min', 'jstree.min'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <?php echo $this->Html->link('Beleid', '/', array('class' => 'navbar-brand')); ?>
                    </div>
                    <form class="navbar-form navbar-right" role="search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
            </nav>
        </div>
        <div class="row">
            <div class="container">
                <?php echo $this->Session->flash(); ?>
                <?php echo $this->fetch('content'); ?>
            </div>
        </div>
        <div class="row">
            <nav class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="navbar-text">
                        <?php echo $this->Html->link('Direktori', '/', array('class' => 'navbar-link')); ?>
                    </div>
                    <form class="navbar-form navbar-right form-inline" role="form">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email">
                            <input type="password" class="form-control" placeholder="Password">
                        </div>
                        <button class="btn btn-default" type="button">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </form>
                </div>
            </nav>
        </div>
    </div>
</body>
</html>
