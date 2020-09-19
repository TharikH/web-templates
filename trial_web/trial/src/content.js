import React from "react";
import { MDBContainer, MDBRow, MDBCol } from "mdbreact";
import Login from './Login';
import './App.css';
import Animate from './Animate';
import Type from './Type';


const Content = () => {
    return (
        <div className="m-0 p-0 mt-5">
            <MDBContainer fluid>
                <MDBRow className="pt-5 justify-content-center">
                    <Animate />
                </MDBRow>
                <MDBRow className="justify-content-center">
                <h3 className="underline text-center"><Type/></h3>
                </MDBRow>
                <MDBRow className="justify-content-center">
                    <MDBCol className="col-cont ml-lg-5 pt-5 pl-lg-5">
                        <Login />
                    </MDBCol>
                </MDBRow>

            </MDBContainer>
        </div>
    );
}

export default Content;