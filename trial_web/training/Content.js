import React from 'react'
import './App.css';

class Content extends React.Component{
    constructor(){
        super();
    }
    render(){
        return(
            <React.Fragment>
                <button className="cont-but">LIFE</button>
            </React.Fragment>
        );
    }
}
export default Content;