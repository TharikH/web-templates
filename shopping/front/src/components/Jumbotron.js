import React from "react";
import { MDBJumbotron, MDBContainer, MDBRow, MDBCol } from "mdbreact";
import Card from './Card';
import '../css/style.css';

const Jumbotron = () => {
  return (
    <MDBJumbotron fluid className="jumbotron m-0">
      <MDBRow  className="scroll p-0">
      <Card />
      <Card />
      <Card />
      <Card />
      <Card />
      <Card />
      <Card />
      </MDBRow>
    </MDBJumbotron>
  )
}

export default Jumbotron;