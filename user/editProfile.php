<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="keywords" content="">
	<!-- Css -->
	<link rel="stylesheet" href="../dist/styles.css">
	<link rel="stylesheet" href="../dist/all.css">
	<style>
		/* Chrome, Safari, Edge, Opera */
		input::-webkit-outer-spin-button,
		input::-webkit-inner-spin-button {
			-webkit-appearance: none;
			margin: 0;
		}

		/* Firefox */
		input[type=number] {
			-moz-appearance: textfield;
		}
	</style>
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet">
	<title>Edit Profile | Rental Hub</title>
</head>

<body class="font-sans antialiased text-gray-900 leading-normal tracking-wider bg-cover" ">
	<!--Container -->
	<div class="mx-auto bg-grey-400">
		<!--Screen-->
		<div class="min-h-screen flex flex-col">
			<!--Header Section Starts Here-->
			<?php include "nav.php"; ?>
			<!--/Header-->

			<div class="flex flex-1">
				<!--Sidebar-->
				<?php include "sidebar.php"; ?>
				<!--/Sidebar-->
				<!--Main-->
				<main class="bg-white-300 flex-1 p-3 overflow-hidden">

					<div class="flex flex-col bg-white rounded m-auto mt-20 w-4/5 p-8 justify-center object-none object-center">
						<div class="w-full lg:w-full flux justify center">
							<img src="../dist/images/editprofile.jpg" class="mb-3 rounded-none w-full lg:rounded-lg shadow hidden hidden md:block lg:block">

						</div>
						<form class="w-full" action="store.php" method="post" enctype="multipart/form-data">
							<div class="flex flex-wrap -mx-3 mb-6">
								<div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
									<label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="grid-first-name">
										Name
									</label>
									<input value="<?php echo $_SESSION['name'] ?>" class="appearance-none block w-full text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600" name="name" type="text" placeholder="name" required>
								</div>
								<div class="w-full md:w-1/2 px-3">
									<label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="grid-last-name">
										Email
									</label>
									<input value="<?php echo $_SESSION['email'] ?>" class="appearance-none block w-full text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600" name="email" type="text" placeholder="Area" readonly>
								</div>
							</div>
							<div class="flex flex-wrap -mx-3 mb-6">
								<div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
									<label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="grid-first-name">
										Phone
									</label>
									<input value="<?php echo $_SESSION['phone'] ?>" class="appearance-none block w-full text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600" name="phone" type="numbers" placeholder="Phone No." required>
								</div>
								<div class="w-full md:w-1/2 px-3">
									<label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="grid-last-name">
										Picture
									</label>
									<input value="<?php echo $_SESSION['image'] ?>" name="image" type='file' class="appearance-none block w-full text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600" name="area" type="text" placeholder="Area" required>
								</div>
							</div>
							<div class="flex justify-end">
								<button class="bg-green-500 hover:bg-green-800 text-white font-bold py-2 px-4 rounded-full">
									Submit
								</button></div>
						</form>
					</div>
				</main>
				<!--/Main-->
			</div>
			<!--Footer-->
			<?php include "footer.php"; ?>
			<!--/footer-->

		</div>

	</div>
	<script src="../main.js"></script>
</body>

</html>