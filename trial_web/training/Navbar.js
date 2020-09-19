import React from 'react';
import './App.css';

function Navbar(){
    return(
        <div className="nav-cont">
            <ul className="nav-ele">
                <li>
                <a href="#">Home</a>
                </li>
                <li>
                <a href="#">About</a>
                </li>
                <li>
                <a href="#">Features</a>
                </li>
                <li>
                <a href="#">Contact</a>
                </li>
            </ul>
        </div>
    );
}

export default Navbar;