// Webpack Imports
import React from 'react';
import {createRoot} from "react-dom/client";
import * as bootstrap from 'bootstrap';
import Filter from './scripts/modules/filter';

import './main.scss';

( function () {
	'use strict';

	window.addEventListener("load", async () => {

		const courseDiv  = document.getElementById('course-div');
		if  (typeof(courseDiv) != 'undefined' && courseDiv != null){
			const courseDivRoot = createRoot(courseDiv);
			courseDivRoot.render(
				<Filter />
			);
		}
	});

	// Focus input if Searchform is empty
	[].forEach.call( document.querySelectorAll( '.search-form' ), ( el ) => {
		el.addEventListener( 'submit', function ( e ) {
			var search = el.querySelector( 'input' );
			if ( search.value.length < 1 ) {
				e.preventDefault();
				search.focus();
			}
		} );
	} );

	// Initialize Popovers: https://getbootstrap.com/docs/5.0/components/popovers
	var popoverTriggerList = [].slice.call( document.querySelectorAll( '[data-bs-toggle="popover"]' ) );
	var popoverList = popoverTriggerList.map( function ( popoverTriggerEl ) {
		return new bootstrap.Popover( popoverTriggerEl, {
			trigger: 'focus',
		} );
	} );
} )();



