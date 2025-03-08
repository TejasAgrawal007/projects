import React, { useState } from 'react';
import axios from 'axios';
import ReactMarkdown from 'react-markdown';

function App() {
  const [question, setQuestion] = useState("");
  const [answer, setAnswer] = useState("");

  async function generateAnswer() {
    setAnswer("loading...");

    const response = await axios({
      url: "https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent?key=AIzaSyD9o2rV6uvT9hTbVks4U1WMqroh4K0F-lE",
      method: "post",
      data: {
        "contents": [{
          "parts": [{ "text": question }]
        }]
      }
    });

    setAnswer(response["data"]["candidates"][0]["content"]["parts"][0]["text"]);
  }

  return (
    <>
      <div className="min-h-screen bg-gray-900 text-white flex flex-col items-center justify-center p-4 sm:p-8">
        <h1 className='text-3xl sm:text-4xl font-extrabold mb-6 text-center text-white'>
          Ask tej.ai
        </h1>

        <textarea
          rows={8}
          cols={60}
          value={question}
          onChange={(e) => setQuestion(e.target.value)}
          className='bg-gray-700 text-white border border-gray-600 p-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600 w-full sm:max-w-3xl mb-6'
          placeholder="Ask me anything..."
        />

        <button
          className='bg-gradient-to-r from-purple-600 to-indigo-600 text-white px-6 py-3 font-semibold rounded-lg shadow-md hover:shadow-lg transition duration-300 ease-in-out w-full sm:w-auto'
          onClick={generateAnswer}
        >
          Generate Answer
        </button>

        <div className="container mt-6 max-w-3xl w-full">
          {/* Wrap the ReactMarkdown inside a div and apply the className to that div */}
          <div className="prose prose-invert text-white mt-4">
            <ReactMarkdown>{answer}</ReactMarkdown>
          </div>
        </div>

        <footer className="w-full text-center text-sm text-gray-400 py-4 mt-12 border-t border-gray-600">
          <p>Created by <span className="font-semibold text-white"><a href="https://www.tejasagrawal.com/">Tejas Agrawal</a></span></p>
        </footer>
      </div>
    </>
  );
}

export default App;
