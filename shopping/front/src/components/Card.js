import React from 'react';
import { MDBBtn, MDBCard, MDBCardBody, MDBCardImage, MDBCardTitle, MDBCardText, MDBCol } from 'mdbreact';

class Card extends React.Component{
  render(props){
  return (
    <MDBCol className="col-xl-2 col-12 col-lg-3 p-1">
      <MDBCard center>
        <MDBCardImage  className="img-fluid center p-5 card-image" src={this.props.imgurl}
          waves />
        <MDBCardBody className="text-center">
          <MDBCardTitle>{this.props.title}</MDBCardTitle>
          <MDBCardText>{this.props.content}</MDBCardText>
          <MDBBtn href="#">BUY</MDBBtn>
        </MDBCardBody>
      </MDBCard>
    </MDBCol>
  )
  }
}

export default Card;