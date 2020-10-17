import React from 'react';
import './App.css';
import {
MDBCol, MDBRow, MDBContainer,MDBBtn
} from "mdbreact";
import Animate from './Animate';
import Type from './Type';

function Home() {
    return (
            <MDBContainer fluid>
                <MDBRow className="img">
                    <MDBCol className="offset-lg-6 col-lg-6 col-12 pt-5 mt-5">
                        <MDBContainer fluid className="mt-5 pt-5">
                            <MDBRow className="justify-content-center align-items-center">
                                <h1 className="head justify-content text-center">
                                    Web Design
                            </h1>
                            </MDBRow>
                            <MDBRow className="justify-content-center">
                                <Animate />
                            </MDBRow>
                            <MDBRow className="mt-5 justify-content-center">
                                <MDBCol className="mt-5 col-md-8 color1 text-center">
                                <Type/>
                                <MDBBtn color="brown" className="rounded">learn more!</MDBBtn>
                                </MDBCol>
                                
                            </MDBRow>
                        </MDBContainer>
                    </MDBCol>
                </MDBRow>
            </MDBContainer>

    );
}
export default Home;