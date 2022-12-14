import React, { useState, useEffect } from 'react';
import Listing from './listing.js';

const List = ({loadItems, setLoadItems, isLoading, listings, triggerShowFilter}) => {
    const [show, setShow] = useState(true);

    let maxItems = 6;
    const loadMoreBtn = (e) => {
      e.preventDefault();
      
      setLoadItems(loadItems + maxItems);
      
    }

    useEffect(() => {
      setLoadItems(6);
    }, []);

    const hideFilter = (e) => {
      e.preventDefault();
      triggerShowFilter(!show);
      setShow(!show);
    }

    let button;
    if (listings.length >= loadItems) {

      button = (
        <a href="#" className="listing-cards__load-btn btn text-decoration-underline" onClick={loadMoreBtn}>
          Load More <i class="fa-solid fa-arrow-down"></i>
        </a>
      );

    } else {
      button = "";
    }

    if (!isLoading && listings.length == 0) {
      return (
        <>
        <div className="col-md-9">
          <div className="course-intro text-primary text-center mb-3">
            <header className="entry-header">
              <h1 className="entry-header">Courses hub</h1>
              <p>Select from individual courses or let us build your own curriculum.</p>
              <button type="button" 
                onClick={hideFilter}
                className="btn btn-outline-pribmary btn-lg mx-auto w-100">
                  {show ? <span>Show Filter</span> : <span>Hide Filter</span>}</button>
            </header>
          </div>
          <p><strong>Oops...</strong></p>
          <p><strong>Sorry! We found no results. Try broadening your search.</strong></p>
        </div>
        </>
      );
    } else {
      return (
        <>
        <div className="col-md-9">
          <div className="course-intro text-primary text-center mb-3">
            <header className="entry-header">
              <h1 className="entry-header">Courses hub</h1>
              <p>Select from individual courses or let us build your own curriculum.</p>
              <button type="button" 
                onClick={hideFilter}
                className="btn btn-outline-pribmary btn-lg mx-auto w-100 d-block d-md-none">
                  {show ? <span>Show Filter</span> : <span>Hide Filter</span>}</button>
            </header>
          </div>
            {
              !isLoading && listings.length > 0 && (
                  listings.slice(0, loadItems).map((list, index) => (
                    <Listing key={index} list={list}/>
                  )
                )
              )
            }
          {button}
        </div>
        </>
      );
    }
};

export default List;