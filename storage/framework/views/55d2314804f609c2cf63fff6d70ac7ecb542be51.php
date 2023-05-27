<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		body {
			font-family: Arial, sans-serif;
			background-color: #f1f1f1;
		}

		.container {
			max-width: 500px;
			margin: 50px auto;
			padding: 20px;
			background-color: #fff;
			border-radius: 10px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
		}

		.container h2 {
			text-align: center;
			margin-bottom: 30px;
			color: #333;
		}

		.form-control {
			display: block;
			width: 100%;
			padding: 10px;
			border-radius: 5px;
			border: none;
			background-color: #f9f9f9;
			box-shadow: inset 0 0 2px rgba(0, 0, 0, 0.2);
			margin-bottom: 20px;
			font-size: 16px;
			color: #333;
		}

		.btn {
			display: inline-block;
			padding: 10px 20px;
			border-radius: 5px;
			border: none;
			background-color: #333;
			color: #fff;
			font-size: 16px;
			cursor: pointer;
		}

		.btn:hover {
			background-color: #444;
		}
	</style>
</head>
<body>
	<div class="container">
			<h2>send email</h2>
			<form action="<?php echo e(route('send-email')); ?>" method="post">
				<?php echo csrf_field(); ?>
				<label for="email">Email</label>
				<input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" required>
				<button type="submit" class="btn">Send Message</button>
			</form>
			
	</div>
</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hp\Desktop\E-commerce-Project-main\resources\views/emails/email.blade.php ENDPATH**/ ?>