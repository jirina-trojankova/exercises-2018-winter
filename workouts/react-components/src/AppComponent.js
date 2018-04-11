import React from 'react';
import ReactDOM from 'react-dom';

import Header from './HeaderComponent';

// declaration of component App
export default class App extends React.Component
{
    render() {

        return (
            <div id="page">

                <Header />

                <div id="main">
                    <nav className="filter">
                        <label htmlFor="filter">Filter</label>
                        <input type="text" name="filter" id="filter" placeholder="enter search term" />
                    </nav>

                    <div className="content">
                        <h1>Products</h1>

                        <div className="product-list">

                            <div className="product">
                                <img src="https://classes.codingbootcamp.cz/assets/classes/workouts/aperture/propulsion-gel.jpg" alt="" />
                                <div className="name">Propulsion gel</div>
                            </div>

                            <div className="product">
                                <img src="https://classes.codingbootcamp.cz/assets/classes/workouts/aperture/weight-cube.jpg" alt="" />
                                <div className="name">Weight cube</div>
                            </div>

                            <div className="product">
                                <img src="https://classes.codingbootcamp.cz/assets/classes/workouts/aperture/friendly-cube.jpg" alt="" />
                                <div className="name">A friend</div>
                            </div>

                            <div className="product">
                                <img src="https://classes.codingbootcamp.cz/assets/classes/workouts/aperture/portal-gun.jpg" alt="" />
                                <div className="name">Portal gun</div>
                            </div>

                            <div className="product">
                                <img src="https://classes.codingbootcamp.cz/assets/classes/workouts/aperture/defense-robot.jpg" alt="" />
                                <div className="name">Home-defense robot</div>
                            </div>

                            <div className="product">
                                <img src="https://classes.codingbootcamp.cz/assets/classes/workouts/aperture/cake.jpg" alt="" />
                                <div className="name">Cake (not a lie)</div>
                            </div>

                        </div>

                    </div>

                </div>

                <footer>
                    &copy; 2027 Aperture Laboratories
                </footer>

            </div>
        )
    }
}
