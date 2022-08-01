import React, { useState, useEffect, useRef } from 'react';
import {isEmpty} from '../../utils';
import Filters from './filters.js';
import List from './list.js';

const Filter = () => {

  if (isEmpty(window.ListingsTaxonomy)) {
    return null;
  }

  const [isLoading, setIsLoading] = useState(false);
  const [loadItems, setLoadItems] = useState(0);
  const [listings, setListings] = useState([]);
  const [origListings, setOrigListings] = useState([]);
  const [filteredListings, setFilteredListings] = useState([]);

  const updateKeyword = (keyword) => {
    if (!isEmpty(keyword)) {
      const smallKeyword = keyword.toLowerCase();
      const filteredItems = listings.filter((list => {
        let title = list.title.toLowerCase();
        return title.includes(smallKeyword);
      }));
      setListings(filteredItems);
    } else {
      setListings(filteredListings);
    }
  }

  const changeFilterFunc = async (categoriesString, levelsString) => {
    let selectedItems = [];

    const categories = categoriesString.map(str => {
      return Number(str);
    });

    const levels = levelsString.map(str => {
      return Number(str);
    });

    origListings.forEach((listing => {

      let selected = true;
      if (!isEmpty(categories)) {
        if (!isEmpty(listing.categories)) {
          const listingCategories = listing.categories.filter((category) => {
            return categories.includes(category.term_id)
          });

          if (isEmpty(listingCategories)) {
            selected = false;
          }
        } else {
          selected = false;
        }
      }

      if (!isEmpty(levels)) {
        if (!isEmpty(listing.levels)) {
          const listingLevels = listing.levels.filter((level) => {
            return levels.includes(level.term_id)
          });

          if (isEmpty(listingLevels)) {
            selected = false;
          }
        } else {
          selected = false;
        }
      }

      if (selected) {
        selectedItems.push(listing);
      }

    }));
    
    setListings(selectedItems);
    setFilteredListings(selectedItems);
    setLoadItems(6);
  }

  const initialFilterFunc = () => {
    setIsLoading(true);
    setListings(window.ListingsTaxonomy);
    setOrigListings(window.ListingsTaxonomy);
    setLoadItems(6);

    setIsLoading(false);
  }

  useEffect(() => {
    initialFilterFunc();
  }, []);

  return (
    <div className="App">
      <div className="mx-auto course-archive my-5">
        <div className="row g-0">
          <Filters 
            updateKeyword={updateKeyword}
            triggerFetchListings={changeFilterFunc}
          />
          <List 
            listings={listings} 
            setLoadItems={setLoadItems} 
            isLoading={isLoading}
            loadItems={loadItems}  
          />
        </div>
      </div>
    </div>
  );

};

export default Filter;