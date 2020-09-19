import React from "react";
import { MDBAnimation } from "mdbreact";
import './App.css';

const Animate = () => {
    return (
        <MDBAnimation type="flipInX" className="slow">
            <h1 className="heading text-center">JOIN NOW</h1>
        </MDBAnimation>
    );
};

export default Animate;