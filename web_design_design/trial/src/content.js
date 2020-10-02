import React from 'react';
import './App.css';
import Navbar from './Navbar';
import Login from './Login';
import Home from './Home';
import {
    BrowserRouter as Router,
    Switch,
    Route,
    Link
} from 'react-router-dom';

function Content(param) {
    return (
        <React.Fragment>
            <Navbar />
            <switch>
                <Route exact path='/' component={Home}></Route>
                <Route exact path='/contact' component={Login}></Route>
            </switch>


        </React.Fragment>

    );
}
export default Content;