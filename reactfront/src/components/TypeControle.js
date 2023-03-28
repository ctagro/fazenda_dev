import React, {useEffect, useState} from 'react'
import axios from 'axios'

import {Link} from 'react-router-dom'

// const endpoint = 'http://127.0.0.1:8000/api'

const TypeControle = () => {
    const [ products, setProducts ] = useState( [] )
    useEffect ( ()=> {
        getAllProducts()
    }, [])
 
const getAllProducts = async () => {

    const response = await axios.get('http://jplvale.com.br/fazendasantaluiza/public/index.php/controlType/index')
    setProducts(response.data)
    console.log(response.data)
}


    return (
    <div>
        <div className='d-grid gap-2'>
            <Link to="/create" className='btn btn-success btn-lg mt-2 mb-2 text-white'>Create</Link>
        </div>
            <table calssName='table table-striped'>
                    <thead className= 'bg-primary text-white'>
                        <tr>
                            <th>Nome</th>
                            <th>Description</th>
                            <th>Nota</th>
                            <th>Uso</th>
                        </tr>
                    </thead>
                    <tbody>
                        { products.map( (product) => (
                             <tr Key={product.id}>
                                <td> {product.name} </td>
                                <td> {product.description} </td>
                                <td> {product.note} </td>
                                <td> {product.in_use} </td>
                                <td>
      
                                </td>
                     
                            </tr>
                         )) }
                    </tbody>
               

            </table>
        </div>    
  )
}

export default TypeControle