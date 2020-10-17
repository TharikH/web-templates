import React, { Component } from 'react';

import Typist from 'react-typist';

export default class Type extends Component {

  render() {
    return (
      <React.Fragment>
        <Typist>
        There are many variations of passages of Lorem Ipsum available, but
        the randomised words which don't look even slightly believable. If you are going
        to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
        hidden in the middle of text.You can offset grid columns in two ways: our responsive .offset-
        grid classes and our margin utilities. Grid classes are sized to match columns while margins are
        more useful for quick layouts where the width of the offset is variable.
        <Typist.Backspace count={8} delay={200} />
        <span> to make difference </span>
      </Typist>
      </React.Fragment>
      
    );
  }
}