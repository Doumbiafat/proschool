<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">

    <link rel="stylesheet" href="{{asset('css/saa.css')}}">
	<link rel="canonical" href="https://demo-basic.adminkit.io/"/>

	<title>Administration</title>

	<link href="{{asset('css/admin/app.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<style>
    /* Style pour l'icône de la validité du mot de passe */
    #passwordIcon.valid {
        color: green; /* Couleur verte pour indiquer un mot de passe valide */
    }

    #passwordIcon.invalid {
        color: red; /* Couleur rouge pour indiquer un mot de passe invalide */
    }


.main{

    background:rgb(230, 164, 42);
}
</style>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
          <span class="align-middle">Admin</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Pages
					</li>

					<li class="sidebar-item active">
						<a class="sidebar-link" href="/admin">
              <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
            </a>
					</li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="/Ajouteruser">
              <i class="align-middle" data-feather="book"></i> <span class="align-middle">Ajouter user</span>
            </a>
                    </li>



					<li class="sidebar-item">
						<a class="sidebar-link" href="/etudiants">
              <i class="align-middle" data-feather="book"></i> <span class="align-middle">Liste Users</span>
            </a>
					</li>
                    <li class="sidebar-item">
						<a class="sidebar-link" href="/ajouterclasse">
              <i class="align-middle" data-feather="book"></i> <span class="align-middle">Ajouter Classes</span>
            </a>
					</li>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/Listeclasse">
          <i class="align-middle" data-feather="book"></i> <span class="align-middle">Liste Classes</span>
        </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/Listenote">
          <i class="align-middle" data-feather="book"></i> <span class="align-middle">Liste Notes</span>
        </a>
                </li>
				</ul>



			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="bell"></i>
									<span class="indicator">4</span>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
								<div class="dropdown-menu-header">
									4 New Notifications
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-danger" data-feather="alert-circle"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Update completed</div>
												<div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
												<div class="text-muted small mt-1">30m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-warning" data-feather="bell"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Lorem ipsum</div>
												<div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-primary" data-feather="home"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">Login from 192.186.1.8</div>
												<div class="text-muted small mt-1">5h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<i class="text-success" data-feather="user-plus"></i>
											</div>
											<div class="col-10">
												<div class="text-dark">New connection</div>
												<div class="text-muted small mt-1">Christina accepted your request.</div>
												<div class="text-muted small mt-1">14h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all notifications</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-bs-toggle="dropdown">
								<div class="position-relative">
									<i class="align-middle" data-feather="message-square"></i>
								</div>
							</a>
							<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="messagesDropdown">
								<div class="dropdown-menu-header">
									<div class="position-relative">
										4 New Messages
									</div>
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-5.jpg" class="avatar img-fluid rounded-circle" alt="Vanessa Tucker">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Vanessa Tucker</div>
												<div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis arcu tortor.</div>
												<div class="text-muted small mt-1">15m ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-2.jpg" class="avatar img-fluid rounded-circle" alt="William Harris">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">William Harris</div>
												<div class="text-muted small mt-1">Curabitur ligula sapien euismod vitae.</div>
												<div class="text-muted small mt-1">2h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-4.jpg" class="avatar img-fluid rounded-circle" alt="Christina Mason">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Christina Mason</div>
												<div class="text-muted small mt-1">Pellentesque auctor neque nec urna.</div>
												<div class="text-muted small mt-1">4h ago</div>
											</div>
										</div>
									</a>
									<a href="#" class="list-group-item">
										<div class="row g-0 align-items-center">
											<div class="col-2">
												<img src="img/avatars/avatar-3.jpg" class="avatar img-fluid rounded-circle" alt="Sharon Lessman">
											</div>
											<div class="col-10 ps-2">
												<div class="text-dark">Sharon Lessman</div>
												<div class="text-muted small mt-1">Aenean tellus metus, bibendum sed, posuere ac, mattis non.</div>
												<div class="text-muted small mt-1">5h ago</div>
											</div>
										</div>
									</a>
								</div>
								<div class="dropdown-menu-footer">
									<a href="#" class="text-muted">Show all messages</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                <img src="img/avatars/avatar.jpg" class="avatar img-fluid rounded me-1" alt="Charles Hall" /> <span class="text-dark">Charles Hall</span>
              </a>
							<div class="dropdown-menu dropdown-menu-end">
								<a class="dropdown-item" href="/profile"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
								<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="pie-chart"></i> Analytics</a>
								<div class="dropdown-divider"></div>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="/logout">Se déconnecter</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">Dashboard</h1>
                    @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
                @if(session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session()->get('error') }}
                    </div>
                @endif

                    <section class="ins" id="ins">
        <div class="box">
          <span class="borderLine"></span>
          <form method="POST" action="/register" >
            @csrf
            <h2>Inscrire</h2>
            <div class="inputBox">
                <input type="name"name="name" id="name" required>
                <span>nom</span>
                <i></i>
            </div>

            <div class="inputBox">
                <input type="prenom"name="prenom" id="prenom" required>
                <span>prenom</span>
                <i></i>
            </div>



              <div class="inputBox">
                  <input type="email"name="email" id="email" required>
                  <span>email</span>
                  <i></i>

              </div>
              <div class="inputBox">
                <input style="margin-top:50px;" type="password" name="password" id="password" required oninput="checkPassword()">

                <span style="margin-top:50px">mot de passe</span>
                <i id="passwordIcon"></i>
                <span id="passwordStatus"></span> <!-- Ajout de l'élément pour afficher le statut du mot de passe -->
            </div>
            <i style="margin-left: 250px;margin-top:10px;color:white;" class="fas fa-eye" id="togglePassword"></i> <!-- Icône pour afficher/masquer le mot de passe -->
              <div class="links">
                  <a href="#">dites-nous tous</a>
                  <!--a href="inscription.php">s'inscrire</a-->
              </div>

              <h3 style="color: white">vous êtes un:</h3>
              <select select name="role" id="role">
                <option value="etudiant">Étudiant</option>
                <option value="enseignant">Enseignant</option>
                <option value="admin">Admin</option>
                <option value="parent">Parent</option>
            </select>
            <select name="etudiant_id" id="etudiant_id" style="display: none;">
                @foreach($etudiants as $etudiant)
                    <option value="{{ $etudiant->etudiant->id }}">{{ $etudiant->etudiant->id }} {{ $etudiant->name }} {{ $etudiant->prenom }}</option>
                @endforeach
            </select>

            <!-- Champ de saisie pour la matière, visible uniquement si le rôle sélectionné est "enseignant" -->
            <select name="matiere" id="matiere" style="display: none;">
                <option value="math">Mathématiques</option>
                <option value="anglais">Anglais</option>
                <option value="physique">Physique</option>
            </select>
            <select name="classe_id" id="classe_id" style="display: none;">
                @foreach($classes as $classe)
                    <option value="{{ $classe->id }}">{{ $classe->libelle }}</option>
                @endforeach
            </select>

            <div id="matriculeField" style="display: none;">
                <input type="text" name="matricule" id="matricule" placeholder="Matricule" required>
            </div>

              <button type="submit">Inscrire</button>


          </form>

        </div>
      </section>

					</div>

				</div>
			</main>

		</div>
	</div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const togglePassword = document.querySelector('#togglePassword');
            const password = document.querySelector('#password');

            togglePassword.addEventListener('click', function(e) {
                // Toggle the type attribute
                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);
                // Toggle the icon
                this.classList.toggle('fa-eye-slash');
            });
        });
    </script>

    <script>
function checkPassword() {
    var passwordInput = document.getElementById('password');
    var passwordStatus = document.getElementById('passwordStatus');
    var passwordIcon = document.getElementById('passwordIcon');

    if (passwordInput.value.length >= 8) {
        passwordStatus.innerText = 'Mot de passe valide';
        passwordIcon.classList.remove('invalid'); // Retirer la classe 'invalid' au cas où elle est présente
        passwordIcon.classList.add('valid'); // Ajouter la classe 'valid' pour la couleur verte
    } else {
        passwordStatus.innerText = 'Le mot de passe doit comporter au moins 8 caractères';
        passwordIcon.classList.remove('valid'); // Retirer la classe 'valid' au cas où elle est présente
        passwordIcon.classList.add('invalid'); // Ajouter la classe 'invalid' pour la couleur rouge
    }
}
    </script>


	<script src="{{asset('js/admin/app.js')}}"></script>
    <script>
        document.getElementById('role').addEventListener('change', function() {
            var role = this.value;
            var classeIdField = document.getElementById('classe_id');

            if (role === 'etudiant' || role === 'enseignant') {
                classeIdField.style.display = 'block';
                document.getElementById('classe_id').required = true;
            } else {
                classeIdField.style.display = 'none';
                document.getElementById('classe_id').required = false;
            }
        });
    </script>

	<script>
         document.getElementById('role').addEventListener('change', function() {
            var role = this.value;
            var matriculeField = document.getElementById('matriculeField');

            if (role === 'etudiant') {
                matriculeField.style.display = 'block';
                document.getElementById('matricule').required = true;
            } else {
                matriculeField.style.display = 'none';
                document.getElementById('matricule').required = false;
            }
        });
		document.addEventListener("DOMContentLoaded", function() {
			var ctx = document.getElementById("chartjs-dashboard-line").getContext("2d");
			var gradient = ctx.createLinearGradient(0, 0, 0, 225);
			gradient.addColorStop(0, "rgba(215, 227, 244, 1)");
			gradient.addColorStop(1, "rgba(215, 227, 244, 0)");
			// Line chart
			new Chart(document.getElementById("chartjs-dashboard-line"), {
				type: "line",
				data: {
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
					datasets: [{
						label: "Sales ($)",
						fill: true,
						backgroundColor: gradient,
						borderColor: window.theme.primary,
						data: [
							2115,
							1562,
							1584,
							1892,
							1587,
							1923,
							2566,
							2448,
							2805,
							3438,
							2917,
							3327
						]
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					tooltips: {
						intersect: false
					},
					hover: {
						intersect: true
					},
					plugins: {
						filler: {
							propagate: false
						}
					},
					scales: {
						xAxes: [{
							reverse: true,
							gridLines: {
								color: "rgba(0,0,0,0.0)"
							}
						}],
						yAxes: [{
							ticks: {
								stepSize: 1000
							},
							display: true,
							borderDash: [3, 3],
							gridLines: {
								color: "rgba(0,0,0,0.0)"
							}
						}]
					}
				}
			});
		});
	</script>
    <script>
        document.getElementById('role').addEventListener('change', function() {
            var role = this.value;
            var matiereField = document.getElementById('matiere');

            if (role === 'enseignant') {
                matiereField.style.display = 'block';
                document.getElementById('matiere').required = true;
            } else {
                matiereField.style.display = 'none';
                document.getElementById('matiere').required = false;
            }
        });
    </script>
    <script>
        document.getElementById('role').addEventListener('change', function() {
            var role = this.value;
            var etudiantIdField = document.getElementById('etudiant_id');

            if (role === 'parent') {
                etudiantIdField.style.display = 'block';
                document.getElementById('etudiant_id').required = true;
            } else {
                etudiantIdField.style.display = 'none';
                document.getElementById('etudiant_id').required = false;
            }
        });
    </script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Pie chart
			new Chart(document.getElementById("chartjs-dashboard-pie"), {
				type: "pie",
				data: {
					labels: ["Chrome", "Firefox", "IE"],
					datasets: [{
						data: [4306, 3801, 1689],
						backgroundColor: [
							window.theme.primary,
							window.theme.warning,
							window.theme.danger
						],
						borderWidth: 5
					}]
				},
				options: {
					responsive: !window.MSInputMethodContext,
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					cutoutPercentage: 75
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Bar chart
			new Chart(document.getElementById("chartjs-dashboard-bar"), {
				type: "bar",
				data: {
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
					datasets: [{
						label: "This year",
						backgroundColor: window.theme.primary,
						borderColor: window.theme.primary,
						hoverBackgroundColor: window.theme.primary,
						hoverBorderColor: window.theme.primary,
						data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
						barPercentage: .75,
						categoryPercentage: .5
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					scales: {
						yAxes: [{
							gridLines: {
								display: false
							},
							stacked: false,
							ticks: {
								stepSize: 20
							}
						}],
						xAxes: [{
							stacked: false,
							gridLines: {
								color: "transparent"
							}
						}]
					}
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var markers = [{
					coords: [31.230391, 121.473701],
					name: "Shanghai"
				},
				{
					coords: [28.704060, 77.102493],
					name: "Delhi"
				},
				{
					coords: [6.524379, 3.379206],
					name: "Lagos"
				},
				{
					coords: [35.689487, 139.691711],
					name: "Tokyo"
				},
				{
					coords: [23.129110, 113.264381],
					name: "Guangzhou"
				},
				{
					coords: [40.7127837, -74.0059413],
					name: "New York"
				},
				{
					coords: [34.052235, -118.243683],
					name: "Los Angeles"
				},
				{
					coords: [41.878113, -87.629799],
					name: "Chicago"
				},
				{
					coords: [51.507351, -0.127758],
					name: "London"
				},
				{
					coords: [40.416775, -3.703790],
					name: "Madrid "
				}
			];
			var map = new jsVectorMap({
				map: "world",
				selector: "#world_map",
				zoomButtons: true,
				markers: markers,
				markerStyle: {
					initial: {
						r: 9,
						strokeWidth: 7,
						stokeOpacity: .4,
						fill: window.theme.primary
					},
					hover: {
						fill: window.theme.primary,
						stroke: window.theme.primary
					}
				},
				zoomOnScroll: false
			});
			window.addEventListener("resize", () => {
				map.updateSize();
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var date = new Date(Date.now() - 5 * 24 * 60 * 60 * 1000);
			var defaultDate = date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) + "-" + date.getUTCDate();
			document.getElementById("datetimepicker-dashboard").flatpickr({
				inline: true,
				prevArrow: "<span title=\"Previous month\">&laquo;</span>",
				nextArrow: "<span title=\"Next month\">&raquo;</span>",
				defaultDate: defaultDate
			});
		});
	</script>

</body>

</html>
