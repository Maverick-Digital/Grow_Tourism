import React, { useState, useEffect, useRef } from 'react';

const Filters = ({
    updateKeyword,
    triggerFetchListings
  }) => {

  const [categoryOptions, setCategoryOptions] = useState(window.FiltersTaxonomy.category);
  const [levelOptions, setLevelOptions] = useState(window.FiltersTaxonomy.level);
  const [categoriesSet, setCategoriesSet] = useState([]);
  const [levelsSet, setLevelsSet] = useState([]);

  const handleCategoryChange = (e) => {
    const selectedCategories = e.target.checked ? [...categoriesSet, e.target.value] 
      : categoriesSet.filter(item => item !== e.target.value);

    setCategoriesSet(selectedCategories);

    triggerFetchListings(selectedCategories, levelsSet);
  }

  const handleLevelChange = (e) => {
    const selectedLevels = e.target.checked ? [...levelsSet, e.target.value] 
      : levelsSet.filter(item => item !== e.target.value);

    setLevelsSet(selectedLevels);

    triggerFetchListings(categoriesSet, selectedLevels);
  }

  useEffect( () => {

  }, []);

  const onInputChange = (e) => {
    const value = e.target.value;
   // if (value.length > 4) {
      updateKeyword(value);
   // }
  }

  return (
    <>
      <div className="col-md-3 text-primary course-filter">
        <form>
        <div className="search-wrap mb-3">
          <h5>Filter &amp; Search</h5>
          <input onChange={onInputChange}
            className="form-control mb-2 rounded-pill border-primary border-2 w-75 text-primary" 
            type="text" placeholder="Keyword or title" aria-label="Search" />
        </div>
        <div className="categories-wrap  mb-3">
          <h5>Categories</h5>
          <div className="cheking-buttons-group d-grid gap-1">
            {
              categoryOptions.map((category, index) => (
                  <div className="form-check" key={index}>
                    <input 
                      className="form-check-input" 
                      type="checkbox" 
                      value={category.id} 
                      id={`flexCheckDefault_${category.id}`}
                      onChange={handleCategoryChange} />
                    <label className="form-check-label" htmlFor={`flexCheckDefault_${category.id}`} 
                      dangerouslySetInnerHTML={{__html: category.title}}></label>
                  </div>
                )
              )
            }
          </div>
        </div>
        <div className="level-wrap  mb-3">
          <h5>Level</h5>
          <div className="cheking-buttons-group d-grid gap-1">
            {
              levelOptions.map((level, index) => (
                <div className="form-check" key={index}>
                  <input 
                    className="form-check-input" 
                    type="checkbox"
                    value={level.id}
                    id={`flexCheckLevels_${level.id}`}
                    onChange={handleLevelChange} />
                  <label className="form-check-label" htmlFor={`flexCheckLevels_${level.id}`}>
                    {level.title}
                  </label>
                </div>
                )
              )
            }
          </div>
        </div>
        </form>
      </div>
    </>
  );

};

export default Filters;
