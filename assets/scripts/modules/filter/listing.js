import React from 'react';
import { isEmpty } from '../../utils';

const Listing = ({list}) => {

    return (
      <>
        <article className="mb-3">
          <div className="card border-primary border-2 shadow">
            <div className="row g-0">
              <div className="col-md-4 overflow-hidden">
                <img src={list.image} className="rounded-start img-fluid img-fluid-course-archive" alt={list.title} />
              </div>
              <div className="col-md-8">
                <div className="card-body p-2 text-primary">
                  <header>
                    <h4 className="card-title">
                      <a href={list.link} title={list.title} rel="bookmark">{list.title}</a>
                    </h4>
                  </header>
                  <div className="card-text entry-content">
                    <div className="course-summary d-flex mb-1">
                      {
                        !isEmpty(list.categories) && (
                          <div className="d-flex align-items-center me-2">
                            <div className="category-wrap small">
                              <span className="category-title text-uppercase small">Category<br /></span>
                              <span>{list.categories.map((category, index, arr) => 
                                <span key={index}><label dangerouslySetInnerHTML={{__html:category.name}}></label>
                                {index != (arr.length-1) && ','}</span>)}</span>
                            </div>
                          </div>
                        )
                      }
                      {
                        !isEmpty(list.duration) && (
                          <div className="d-flex align-items-center me-2">
                            <div className="category-wrap small ms-1">
                              <span className="category-title text-uppercase small">Duration<br /></span>
                              <span>{list.duration}</span>
                            </div>
                          </div>
                        )
                      }
                      {
                        !isEmpty(list.levels) && (
                          <div className="d-flex align-items-center me-2">
                            <div className="category-wrap small ms-1">
                              <span className="category-title text-uppercase small">Level<br /></span>
                              <span>{list.levels.map((level, index, arr) => 
                                <span key={index}><label dangerouslySetInnerHTML={{__html:level.name}}></label>
                                {index != (arr.length-1) && ','}</span>)}</span>
                            </div>
                          </div>
                        )
                      }
                    </div>
                    {
                        !isEmpty(list.description) && (
                          <>
                            <span className="category-title text-uppercase small">course description</span>
                            <p className="small" dangerouslySetInnerHTML={{__html: list.description}}></p>
                          </>
                        )
                    }
                  </div>
                  <footer className="entry-meta">
                    {
                      !isEmpty(list.link) && (
                        <a href={list.link} 
                          className="btn btn-sm px-2 btn-primary rounded-pill mx-1">See course overview</a>
                      )
                    }
                    <a className="btn btn-sm px-2 btn-primary rounded-pill mx-1" href="">Add to curriculum</a>
                  </footer>
                </div>
              </div>
            </div>
          </div>
        </article>
      </>
    );

};

export default Listing;
