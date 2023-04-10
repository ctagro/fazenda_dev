import React, {useEffect, useState} from 'react'
import axios from 'axios'

import {Link} from 'react-router-dom'

const endpoint = 'http://127.0.0.1:8000/api'

const ShowPrice_ceasa_bhs = () => {
    const [ price_ceasa_bhs, setPrice_ceasa_bhs ] = useState( [] )
    useEffect ( ()=> {
        getAllPrice_ceasa_bhs()
    }, [])
 
const getAllPrice_ceasa_bhs = async () => {

    const response = await axios.get(`${endpoint}/price_ceasa_bhs`)
    setPrice_ceasa_bhs(response.data)
}

const deletePrice_ceasa_bh = async () => {
    await axios.delete( `${endpoint}/price_ceasa_bh/{id}`)
    getAllPrice_ceasa_bhs()

} 
    return (
       <div>
        <div className='d-grid gap-2'>
            <Link to="/create" className='btn btn-success btn-lg mt-2 mb-2 text-white'>Create</Link>
        </div>
            <table className='table table-striped'>
                    <thead className= 'bg-primary text-white'>
                        <tr>
                            <th>Data</th>
                            <th>Produto</th>
                            <th>Embalagem</th>
                            <th>Price_min</th>
                            <th>Price_com</th>
                            <th>price_max</th>
                            <th>Situation</th>
                        </tr>
                    </thead>
                    <tbody>
                        { price_ceasa_bhs.map( (price_ceasa_bh) => (
                             <tr Key={price_ceasa_bh.id}>
                                <td> {price_ceasa_bh.date} </td>
                                <td> {price_ceasa_bh.product} </td>
                                <td> {price_ceasa_bh.embalagem} </td>
                                <td> {price_ceasa_bh.price_min} </td>
                                <td> {price_ceasa_bh.price_com} </td>
                                <td> {price_ceasa_bh.price_max} </td>
                                <td> {price_ceasa_bh.situation} </td>
                                <td>
                                <Link to={`/edit/${price_ceasa_bh.id}`} className='btn btn-warning'>Edit</Link>
                                <button onClick={ ()=>deletePrice_ceasa_bh(price_ceasa_bh.id)} className='btn btn-danger'>Delete</button>
                                </td>
                     
                            </tr>
                         )) }
                    </tbody>
               

            </table>
        </div>    
  )
}

export default ShowPrice_ceasa_bhs

