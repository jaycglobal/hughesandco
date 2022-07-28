<?php
function hughesco_enqueue_theme_assets_test() {
    wp_enqueue_style('hughesco-test', get_stylesheet_directory_uri() . '/assets/styles/test.css');

}

add_action( 'wp_enqueue_scripts', 'hughesco_enqueue_theme_assets_test', 9999 );

?>

<footer>
	<div class="container">
		<div class="row footer-content">
			<div class="col-12 col-lg-6 col-xl-3 order-1 order-xl-1 footer-logo">
				<svg class="site-logo" data-name="Group 52" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="471.401" height="238.975" viewBox="0 0 471.401 238.975">
					<defs>
						<clipPath id="clip-path">
							<rect id="Rectangle_3" data-name="Rectangle 3" width="471.401" height="238.975" fill="#fff" />
						</clipPath>
					</defs>
					<g id="Mask_Group_2" data-name="Mask Group 2" transform="translate(0 0)" clip-path="url(#clip-path)">
						<path id="Path_1" data-name="Path 1" fill="#fff" d="M97.7,4.851v96c.1.754.837,3.725,5.933,3.725,0,0,3.608.063,5.116.075h5.558v.65H67.576v-.65h5.537c1.508-.012,5.121-.075,5.121-.075,5.821,0,5.946-3.879,5.946-3.9V51.623H37.869v49.222c.1.754.837,3.725,5.933,3.725,0,0,3.608.063,5.116.075h5.554v.65H7.746v-.65h5.537c1.508-.012,5.116-.075,5.116-.075,5.825,0,5.954-3.879,5.954-3.9v-96C24.245,3.922,23.512.951,18.42.951c0,0-3.612-.062-5.116-.079H7.746V.226H54.473V.872H48.936c-1.508.017-5.116.075-5.116.075-5.837,0-5.95,3.9-5.95,3.9V50.9H84.18V4.676c-.1-.754-.837-3.725-5.929-3.725,0,0-3.608-.062-5.116-.079H67.576V.226h46.731V.872h-5.541c-1.508.017-5.116.079-5.116.079-5.837,0-5.95,3.9-5.95,3.9" transform="translate(24.527 0.714)" />
						<path id="Path_2" data-name="Path 2" fill="#fff" d="M111.269,72.573h.054v.65H88.683V53.7L87.2,58.116,87,58.541a54.616,54.616,0,0,1-3.175,5.979,23.768,23.768,0,0,1-4.5,5.371A22.677,22.677,0,0,1,73.088,73.8a21,21,0,0,1-8.316,1.517,28.677,28.677,0,0,1-9.483-1.3,23.776,23.776,0,0,1-5.658-2.75c-.679-.487-1.442-1.1-2.262-1.821a10.458,10.458,0,0,1-2.158-2.871,21.315,21.315,0,0,1-1.733-4.846,32.018,32.018,0,0,1-.725-7.383V15.11s-.112-3.9-5.95-3.9c0,0-3.608-.062-5.116-.075h-.45v-.65h22.94V55.691a46.964,46.964,0,0,0,.533,7.3,16.573,16.573,0,0,0,2.117,6.021,11.872,11.872,0,0,0,4.137,4.133,12.909,12.909,0,0,0,6.65,1.525,14.82,14.82,0,0,0,7.158-2.037,23.006,23.006,0,0,0,6.645-5.712,32.551,32.551,0,0,0,4.975-8.8,31.933,31.933,0,0,0,1.992-11.558V15.076c-.025-.371-.417-3.866-5.946-3.866,0,0-3.612-.062-5.116-.075h-.308v0h-.146v-.646H99.807V68.59s.112,3.9,5.95,3.9C105.757,72.494,110.153,72.569,111.269,72.573Z" transform="translate(98.907 33.198)" />
						<path id="Path_3" data-name="Path 3" fill="#fff" d="M150.071,105.774v.65H138.555v-.008H127.126v.008H115.61v-.654h.833c1.658-.021,4.733-.075,4.733-.075,5.75,0,5.946-3.775,5.95-3.891V56.722a16.485,16.485,0,0,0-2.9-10c-1.983-2.667-5.083-4.021-9.2-4.021a21.433,21.433,0,0,0-9.424,2.162,24.384,24.384,0,0,0-7.858,6,28.436,28.436,0,0,0-5.3,9.05A32.507,32.507,0,0,0,90.537,71.23v30.657c.058.571.621,3.808,5.941,3.808,0,0,3.075.054,4.733.075h.842v.646h-.008v.008H90.524v-.008H79.108v.008H67.592v-.654h.833c1.658-.021,4.733-.075,4.733-.075,5.837,0,5.95-3.9,5.95-3.9V19.932c0-14.633-1.821-12.166-10.92-9.12l-.038-.325c3.516-1.4,7.354-3.258,10.958-5.133C82.354,3.675,85.4,1.529,87.816.179a1.132,1.132,0,0,1,.25-.108A2.852,2.852,0,0,1,88.641,0,1.3,1.3,0,0,1,88.9.017h.017C89.67.162,90.5.754,90.5,2.558V13.933l.038,49.622L92.049,58.8l.183-.471A30.665,30.665,0,0,1,94.7,53.585a22.724,22.724,0,0,1,4.725-5.354,27.906,27.906,0,0,1,7.3-4.379,26.262,26.262,0,0,1,10.254-1.821c6.4,0,11.662,1.571,15.649,4.65,3.925,3.029,5.929,7.966,5.929,14.691v40.423s.113,3.9,5.95,3.9c0,0,3.075.054,4.733.075h.833Z" transform="translate(214.027 -0.002)" />
						<path id="Path_4" data-name="Path 4" fill="#fff" d="M144,59.35l.867.167c-.325.987-.812,2.3-1.479,3.875a20.9,20.9,0,0,1-3.912,5.929,23.47,23.47,0,0,1-7.262,5.225c-3.029,1.5-7.012,2.254-11.862,2.254a38.148,38.148,0,0,1-13.587-2.362A30.3,30.3,0,0,1,88.993,57.258a35.694,35.694,0,0,1-2.487-13.549A32.069,32.069,0,0,1,89.064,31.2,35.842,35.842,0,0,1,96.11,20.418a35.024,35.024,0,0,1,10.5-7.554,28.973,28.973,0,0,1,21.607-1.387,25.831,25.831,0,0,1,8.654,4.741,26.342,26.342,0,0,1,6.708,8.654A29.855,29.855,0,0,1,146.257,37.6H89.893s9.537.017,10.237,11.912v.038c.092,2.017.254,4.091.5,6.2a31.728,31.728,0,0,0,2.671,9.949,19.02,19.02,0,0,0,6.216,7.462c2.758,1.983,6.454,2.975,10.979,2.975a27,27,0,0,0,11.137-2,20.893,20.893,0,0,0,6.979-4.887,21.129,21.129,0,0,0,3.783-5.821c.683-1.583,1.225-2.954,1.6-4.075m-43.727-22.4h32.065l.092-.629a29.58,29.58,0,0,0,.308-3.983V28.6a31,31,0,0,0-1.012-8.6,14.348,14.348,0,0,0-2.829-5.5,10.389,10.389,0,0,0-4.508-2.975,17.394,17.394,0,0,0-5.533-.867,16.6,16.6,0,0,0-8.758,2.129,15.807,15.807,0,0,0-5.5,5.716,29.6,29.6,0,0,0-2.991,8.125,64.063,64.063,0,0,0-1.279,9.537Z" transform="translate(273.917 31.723)" />
						<path id="Path_5" data-name="Path 5" fill="#fff" d="M148.543,56.266a20.449,20.449,0,0,1-1.517,7.662,18.6,18.6,0,0,1-4.471,6.554,23.113,23.113,0,0,1-7.254,4.566,26.074,26.074,0,0,1-9.824,1.742,25.085,25.085,0,0,1-5.891-.654c-1.817-.442-3.508-.917-5.033-1.4q-2.312-.744-4.25-1.417a11.886,11.886,0,0,0-3.829-.712,4.16,4.16,0,0,0-2.875.858,7.4,7.4,0,0,0-1.1,1.237h-.533V55.2h.387a57.486,57.486,0,0,0,2.571,6.829,26.533,26.533,0,0,0,4.541,6.92,22.407,22.407,0,0,0,7.025,5.175,23.072,23.072,0,0,0,10.037,2.021,14.266,14.266,0,0,0,8.975-3.071c2.662-2.083,4.016-5.471,4.016-10.07,0-4-1.075-6.883-3.191-8.566a23.749,23.749,0,0,0-7.02-3.787l-11.67-4.033c-1.475-.492-3.091-1.112-4.816-1.854a16.975,16.975,0,0,1-4.662-3.017,14.653,14.653,0,0,1-3.491-4.921,19.037,19.037,0,0,1-1.358-7.783,17.836,17.836,0,0,1,1.579-7.475,19.135,19.135,0,0,1,10.9-10.1,23.687,23.687,0,0,1,8.35-1.45,20.938,20.938,0,0,1,5.129.5c1.329.342,2.5.692,3.462,1.029s1.854.683,2.642,1.025a7.752,7.752,0,0,0,3.129.583,3.37,3.37,0,0,0,2.762-1.2h.554V27.575h-.4c-.671-2.05-1.429-4.037-2.254-5.929a26.433,26.433,0,0,0-3.312-5.612,13.84,13.84,0,0,0-4.891-3.946,15.482,15.482,0,0,0-6.82-1.421c-4.933,0-8.837,1.137-11.6,3.383a11.237,11.237,0,0,0-4.229,9.158,9.155,9.155,0,0,0,3.658,7.841,36.084,36.084,0,0,0,10.158,4.666L133.027,39.3a30.946,30.946,0,0,1,11.254,6.425,13.818,13.818,0,0,1,4.262,10.537" transform="translate(322.858 31.719)" />
						<path id="Path_6" data-name="Path 6" fill="#fff" d="M94.112,135.668a14.119,14.119,0,0,1-5.321,3.408,18.769,18.769,0,0,1-10.937.371,10.58,10.58,0,0,1-3.712-1.962,17.511,17.511,0,0,1-3.087-3.379c-.983-1.371-2.079-3.021-3.271-4.9l-.479-.762-.642.637a36.18,36.18,0,0,1-4.4,3.667,40.974,40.974,0,0,1-5.954,3.529,42.547,42.547,0,0,1-7.283,2.721,31.684,31.684,0,0,1-8.483,1.092c-6.125,0-11.341-1.2-15.5-3.566a33.638,33.638,0,0,1-10.183-8.637A31.981,31.981,0,0,1,9.371,117.2a36.181,36.181,0,0,1-1.617-9.6,30.84,30.84,0,0,1,2.7-13.308,37.5,37.5,0,0,1,6.9-10.054,52.433,52.433,0,0,1,9.225-7.6c3.379-2.187,6.687-4.191,9.837-5.958l.6-.337-.308-.617a77.577,77.577,0,0,1-3.258-7.633,30.1,30.1,0,0,1-1.6-10.445,21.162,21.162,0,0,1,1.729-8.754,22.291,22.291,0,0,1,4.5-6.591,19.169,19.169,0,0,1,13.4-5.625,13.214,13.214,0,0,1,9.17,3.408c2.471,2.237,3.725,5.833,3.725,10.683a19.434,19.434,0,0,1-1.367,7.575,21.917,21.917,0,0,1-3.475,5.721A22.975,22.975,0,0,1,54.8,62.267c-1.762,1.175-3.458,2.225-5.037,3.112l-.608.342,26.953,51.435.05.142,1.529-2.075a12.02,12.02,0,0,1,21.72,5s1.379,8.95-5.3,15.441M67.018,127.8,37.3,70.921l-.633.333c-5.246,2.721-9.533,5.716-12.67,9.312-3.2,3.662-4.816,8.525-4.816,14.458a46.826,46.826,0,0,0,2.429,14.362,59.843,59.843,0,0,0,6.358,13.7,42.454,42.454,0,0,0,8.9,10.274c3.358,2.733,6.808,4.125,10.258,4.125a21.267,21.267,0,0,0,10.445-2.708,46.707,46.707,0,0,0,9.045-6.608ZM41.623,44.164a26.351,26.351,0,0,0,2.221,9.545c1.437,3.579,3.083,7.22,4.883,10.824l.346.692.662-.4c1.7-1,3.4-2.067,5.046-3.162a20.714,20.714,0,0,0,4.491-4.029,20.111,20.111,0,0,0,3.187-5.425,19.772,19.772,0,0,0,1.246-7.3c0-3.508-.508-6.925-2.583-9.358a10.955,10.955,0,0,0-9.058-4.229,9.437,9.437,0,0,0-7.358,3.7,13.653,13.653,0,0,0-3.083,9.141m56,84.621c.329-.921.671-1.912.937-2.95a14.663,14.663,0,0,0-.479-8.4,11.535,11.535,0,0,0-20.024-1.95l-1.717,2.329.033.1.187.35a105.028,105.028,0,0,0,6.933,11.379c2.129,2.925,4.641,4.408,7.466,4.408a6.047,6.047,0,0,0,4.312-1.542,9.426,9.426,0,0,0,2.35-3.721" transform="translate(24.553 97.123)" />
						<path id="Path_7" data-name="Path 7" fill="#fff" d="M120.039,108.292v30.428h-1.2a15.365,15.365,0,0,0-2.292-2.033,7.814,7.814,0,0,0-4.612-1.108,17.168,17.168,0,0,0-5.079.854q-2.612.831-5.983,1.871a71.394,71.394,0,0,1-7.479,1.85,47.847,47.847,0,0,1-9.137.808,49.963,49.963,0,0,1-18.066-3.391A49.233,49.233,0,0,1,49.6,126.508,64.246,64.246,0,0,1,37.476,109.35a51.4,51.4,0,0,1-4.862-22.87A57.347,57.347,0,0,1,47.68,47.62,53.572,53.572,0,0,1,64.362,35.441,48.941,48.941,0,0,1,85.3,30.95a33.631,33.631,0,0,1,8.054.871,51.887,51.887,0,0,1,6.346,2q2.844,1.119,5.246,2.021a13.958,13.958,0,0,0,4.891.946,7.706,7.706,0,0,0,4.7-1.125,17.19,17.19,0,0,0,2.2-2.017h1.2V62.119h-.354a93.073,93.073,0,0,0-3.337-10.754,32.675,32.675,0,0,0-5.966-10.02,28.488,28.488,0,0,0-9.745-7.062A35.385,35.385,0,0,0,83.953,31.6a34.884,34.884,0,0,0-13.9,2.529,29.581,29.581,0,0,0-9.812,6.75A32.85,32.85,0,0,0,53.9,50.666a58.643,58.643,0,0,0-3.558,11.662,91.393,91.393,0,0,0-1.583,12.366c-.25,4.121-.375,8.087-.375,11.783,0,10.491.862,19.307,2.562,26.2,1.712,6.95,4.146,12.529,7.233,16.574A25.276,25.276,0,0,0,69.5,137.87a41.37,41.37,0,0,0,14.462,2.437c6.754,0,12.3-.979,16.462-2.908a28.306,28.306,0,0,0,10.129-7.6,33.492,33.492,0,0,0,5.812-10.549c1.237-3.666,2.35-7.35,3.308-10.954Z" transform="translate(103.271 98)" />
						<path id="Path_8" data-name="Path 8" fill="#fff" d="M122.875,74.721a29.476,29.476,0,0,1-2.925,12.924,36.339,36.339,0,0,1-18.632,17.824,31.334,31.334,0,0,1-25.165,0A36.38,36.38,0,0,1,57.52,87.645,29.5,29.5,0,0,1,54.6,74.721a28.81,28.81,0,0,1,3.137-13.287A37.166,37.166,0,0,1,76.819,43.818a29.806,29.806,0,0,1,23.84,0,37.179,37.179,0,0,1,19.078,17.616,28.859,28.859,0,0,1,3.137,13.287m-13.516,0a80.415,80.415,0,0,0-1.212-15.178,29.047,29.047,0,0,0-3.766-10.124,14.919,14.919,0,0,0-6.525-5.729,22.625,22.625,0,0,0-9.116-1.708,22.6,22.6,0,0,0-9.116,1.708A14.919,14.919,0,0,0,73.1,49.418a28.884,28.884,0,0,0-3.766,10.124,80.262,80.262,0,0,0-1.212,15.178c0,7.112.562,12.862,1.671,17.087a26.736,26.736,0,0,0,4.471,9.916,13.205,13.205,0,0,0,6.645,4.654,28.953,28.953,0,0,0,15.662,0,13.205,13.205,0,0,0,6.645-4.654,26.869,26.869,0,0,0,4.475-9.916c1.108-4.233,1.667-9.983,1.671-17.087" transform="translate(172.885 130.871)" />
						<path id="Path_9" data-name="Path 9" fill="#fff" d="M120,12.757a12.72,12.72,0,0,0-7.391-2.433,17.471,17.471,0,0,0-7.354,1.75,27.262,27.262,0,0,0-6.687,4.579c-.412.375-.829.775-1.225,1.187l-.412-.412a32.632,32.632,0,0,0-6.941-4.816A22.967,22.967,0,0,0,78.739,10.02a29.222,29.222,0,0,0-8.833,1.458,27.963,27.963,0,0,0-8.383,4.308,24.35,24.35,0,0,0-6.254,6.9,17.052,17.052,0,0,0-2.433,9.045c0,6.47,2.65,11.929,8.316,15.524-.108.079-.237.146-.346.229a23.6,23.6,0,0,0-5.954,6.262,19.811,19.811,0,0,0-2.842,7.341,15.63,15.63,0,0,0,.646,7.65,16.582,16.582,0,0,0,3.983,6.837,14.877,14.877,0,0,0,5.425,3.346,20.454,20.454,0,0,0,6.108,1.108c1.55.042,2.987.029,4.358-.008.333-.008.675-.013,1-.025.179-.008.379-.008.554-.017l14.166-.546a29.421,29.421,0,0,1,8.954.954c2.875.8,4.983,3.121,6.258,6.9,1.471,4.341,1.062,8.045-1.217,11.008a18.443,18.443,0,0,1-8.92,6.246,45.163,45.163,0,0,1-7.35,1.887l.171.612a34.524,34.524,0,0,0,6.233-1.5,35.129,35.129,0,0,0,10.287-5.312,27.959,27.959,0,0,0,6.546-7.02,18.872,18.872,0,0,0,2.837-7.858,17.806,17.806,0,0,0-.775-7.8A12.858,12.858,0,0,0,103.2,69.2a37.91,37.91,0,0,0-14.466-1.867l-13.2.687c-2.025.125-3.841.146-5.55.117-.175,0-.354,0-.525-.008A33.352,33.352,0,0,1,62.84,67.4,8.691,8.691,0,0,1,56.3,61.372a10.645,10.645,0,0,1,1.746-10.233A16.881,16.881,0,0,1,61.8,47.651c.492.292,1.042.6,1.4.792a32.626,32.626,0,0,0,5.908,2.437A27.91,27.91,0,0,0,78,52.247a31.346,31.346,0,0,0,9.716-1.529,26.755,26.755,0,0,0,8.312-4.291,23.417,23.417,0,0,0,5.729-6.379A15.06,15.06,0,0,0,103.9,32.19a16.882,16.882,0,0,0-2-8.616A32.338,32.338,0,0,0,98.547,18.6l-.146-.162-.233-.271-.012,0a12.111,12.111,0,0,1,1.421-.854,7.243,7.243,0,0,1,7.479.408,16.291,16.291,0,0,1,3.621,3.837s5.1,7.462,10.491,1.171c0,0,4.579-5.462-1.171-9.966M90.568,46.426C88.243,49.872,84.314,51.6,78.906,51.6a19.4,19.4,0,0,1-7.929-1.408,11.97,11.97,0,0,1-5.083-4.216,16.656,16.656,0,0,1-2.6-6.491,45.137,45.137,0,0,1-.683-8.2c0-7.229,1.367-12.508,4.054-15.716,2.737-3.262,6.8-4.9,12.074-4.9a15.686,15.686,0,0,1,8.237,1.9A12.018,12.018,0,0,1,91.6,17.59a20.933,20.933,0,0,1,1.675,5.046c.054.325.108.629.146.954.054.217.071.433.108.65a55.418,55.418,0,0,1,.45,7.045c0,6.687-1.137,11.787-3.408,15.141" transform="translate(164.023 31.726)" />
						<rect id="Rectangle_2" data-name="Rectangle 2" width="2.775" height="236.267" transform="translate(0 0.942)" fill="#0facb5" />
					</g>
				</svg>
				<p>
					Hughes & Co offer full-scope PR communications and marketing services across the superyacht sector.
				</p>
			</div>
			<div class="footer-menu col-12 col-md-6 col-xl-2 order-4 order-xl-2">
			</div>
			<div class="col-12 col-md-6 col-xl-3 order-3 order-xl-3">
				<div class="footer-contact">
					<div class="contact-info">

						<p>
							<a href="mailto:hello@roxannehughes.com">hello@roxannehughes.com</a>
						</p>
						<p><a href="tel:+44 (0) 7713 891 945">+44 (0) 7713 891 945</a> </p>

					</div>

					<div class="contact-social">
						<a href="https://www.instagram.com/superyachtrox/" target="_blank" class="social-link">
							<?php echo file_get_contents(get_stylesheet_directory() . '/assets/images/svg/fb.svg'); ?>
						</a>
						<a href="https://www.linkedin.com/in/roxanne-hughes-76181a56/" target="_blank" class="social-link">
							<?php echo file_get_contents(get_stylesheet_directory() . '/assets/images/svg/linkedin.svg'); ?>
						</a>


					</div>
				</div>

			</div>
			<div class="col-12 col-lg-6 col-xl-4 order-2 order-xl-4 footer-form">
				<div class="wrap">
					<p class="footer-title">Join our network</p>
					<?php echo do_shortcode('[contact-form-7 id="54" title="Untitled"]'); ?>
				</div>

			</div>
		</div>
		<div class="row under-footer">
			<div class="col-12 col-xl-6 order-3 order-xl-1">
				<p class="copyright">© Copyright Hughes & Co. 2022. All rights reserved.</p>
			</div>
			<div class="col-6 col-xl-3 text-xl-right order-1 order-xl-2">
				<a class="internal-link" href="<?php echo get_privacy_policy_url(); ?>">Privacy Policy</a>
			</div>
			<div class="col-6 col-xl-3 text-xl-right order-2 order-xl-3">
				<a class="internal-link" href="<?php echo get_site_url(null, 'terms-conditions'); ?>">Terms and conditions</a>
			</div>
			<div class="col-12 col-xl-6 order-4 order-xl-4">
				<p class="copyright-excerpt">Website designed and created by <a href="https://discoverglobal.co.uk" target="_blank">Global</a>.</p>
			</div>
			<div class="col-12 col-xl-6 order-5 order-xl-5 text-xl-right">
				<p class="copyright-excerpt">Photos courtesy of Breed Media.</p>
			</div>
		</div>
	</div>
</footer>


