Vue.component("badge", {

	props: {
		title: {
			default: ""
		},

		descr:{
			default: ""
		},

		img: {
			required: true
		}
	},

	template: `
		<div class="tiny-badge" @click="popup">
			<div class="img"><img :src="img"></div>
			<p class="descr light" v-text="title"></p>
		</div>
	`,

	/*data(){
		return {};
	},*/

	methods: {
		popup(){
			if ( typeof swal === "function" ) {
				swal({
					title: this.title,
					text: this.descr
				});
			}

			else {
				console.warn( "SweetAlert is not included. Using default alerts instead.\n", alert );

				window.alert( this.title + "\n" + this.descr );
			}
		}
	}
});

Vue.component("swipe",{
	props: {
		scroll: {
			//default: undefined
		},

		img:{},

		imgclass: {},

		dir: {},

		behavior: {
			default: "smooth"
		}
	},

	template: `
		<div @click="swipe" style="cursor: pointer;">
			<img :src="img" :class="this.imgclass">
			<slot></slot>
		</div>
	`,

	methods: {
		swipe(){
			var scroll;

			if ( this.scroll === undefined || this.scroll === null )
				scroll = window.innerHeight;

			switch ( this.dir ){
				case ( "down" ):
					window.scrollBy({
						top: scroll,
						behavior: this.behavior
					});

					/*if ( this.scrollOffset <= document.body.scrollHeight )*/ this.scrollOffset += scroll;
				break;

				case ( "up" ):
					window.scrollBy({
						top: -scroll,
						behavior: this.behavior
					});

					//this.scrollOffset -= scroll;
				break;

				case ( "top" ):
					window.scrollTo({
						top: 0,
						behavior: this.behavior
					});

					//this.scrollOffset = 0;
				break;

				case ( "bottom" ):
					window.scrollTo({
						top: document.body.scrollHeight,
						behavior: this.behavior
					});

					//this.scrollOffset = document.body.scrollHeight;
				break;

				default:
					window.scrollTo({
						top: window.innerHeight,
						behavior: this.behavior
					});

					//if ( this.scrollOffset <= document.body.scrollHeight ) this.scrollOffset += scroll;
				break;
			}
		}
	}/*,

	data(){
		return {
			scrollOffset: 0
		}
	}*/
});

Vue.component("radar-chart", {
	template: `
		<div class="spaced-vertical" id="chart-wrapper">
			<canvas id="radar-chart"></canvas>
		</div>
	`
});

function s2i_tools_setup(){
	new Vue({
		el: "#s2i_tools"
	});

	if ( typeof radarStart === "function" ) radarStart();
	else console.warn( "The Radar Chart element cannot be initialized if you do not include:\n - https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js\n - radar-chart.js" );
}