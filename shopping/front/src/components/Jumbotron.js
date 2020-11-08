import React from "react";
import { MDBJumbotron, MDBContainer, MDBRow, MDBCol } from "mdbreact";
import Card from './Card';
import '../css/style.css';

class Jumbotron extends React.Component {
  constructor(props) {
    super();
  }
  render() {
    return (
      <MDBJumbotron fluid className="jumbotron m-0">
        <MDBRow className="scroll p-0">
          {this.props.val.map((val) =>
            (< Card title={val.title} content={val.content} imgurl={val.imgurl} />)
          )}
        </MDBRow>
      </MDBJumbotron>
    )
  }

}

export default Jumbotron;